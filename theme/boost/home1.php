<?php
require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/enrollib.php');

global $DB, $CFG;

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/home1.php'));
$PAGE->set_title('Home Page');

$formatprice = static function($amount, string $currency = 'INR'): string {
    $currency = trim($currency) !== '' ? trim($currency) : 'INR';
    $value = number_format((float) $amount, 2);

    if ($currency === 'INR') {
        return '&#8377; ' . $value;
    }

    return $currency . ' ' . $value;
};

$shortentext = static function(string $text, int $limit = 140): string {
    $text = trim(preg_replace('/\s+/', ' ', $text));
    if ($text === '') {
        return '';
    }

    if (core_text::strlen($text) <= $limit) {
        return $text;
    }

    return rtrim(core_text::substr($text, 0, $limit - 3)) . '...';
};

$navcourses = $DB->get_records_sql("
    SELECT c.id, c.fullname
    FROM {course} c
    LEFT JOIN {course_categories} cc ON cc.id = c.category
    WHERE c.id <> 1
      AND c.visible = 1
      AND (cc.id IS NULL OR cc.visible = 1)
    ORDER BY c.timecreated DESC
", null, 0, 10);

$navcoursedata = [];
foreach ($navcourses as $course) {
    $navcoursedata[] = [
        'name' => format_string($course->fullname, true, [
            'context' => context_course::instance($course->id),
            'escape' => false,
        ]),
        'url' => (new moodle_url('/enrol/index.php', ['id' => $course->id]))->out(false),
    ];
}

$homecourses = $DB->get_records_sql("
    SELECT c.id, c.fullname, c.summary, c.category, c.startdate, cc.name AS categoryname
    FROM {course} c
    LEFT JOIN {course_categories} cc ON cc.id = c.category
    WHERE c.id <> 1
      AND c.visible = 1
      AND (cc.id IS NULL OR cc.visible = 1)
    ORDER BY c.timecreated DESC
", null, 0, 24);

$badges = ['Top Rated', 'Trending', 'Core Skill', 'Career Track', 'Featured', 'Popular'];
$defaultimage = $CFG->wwwroot . '/media/new/s-m.jpg';
$coursedata = [];
$pricesbycourse = [];
$courseids = array_keys($homecourses);
$recommendedlayoutpattern = ['', 'ts3-tall', '', 'ts3-wide', '', 'ts3-tall'];

if (!empty($courseids)) {
    [$insql, $params] = $DB->get_in_or_equal($courseids, SQL_PARAMS_NAMED);
    $params['enabledstatus'] = ENROL_INSTANCE_ENABLED;

    $enrolinstances = $DB->get_records_sql("
        SELECT courseid, cost, currency
        FROM {enrol}
        WHERE courseid $insql
          AND status = :enabledstatus
    ", $params);

    foreach ($enrolinstances as $instance) {
        $cost = trim((string) $instance->cost);
        if ($cost === '' || !is_numeric($cost) || (float) $cost <= 0) {
            continue;
        }

        $amount = (float) $cost;
        if (!isset($pricesbycourse[$instance->courseid]) || $amount < $pricesbycourse[$instance->courseid]['amount']) {
            $currency = trim((string) $instance->currency) !== '' ? trim((string) $instance->currency) : 'INR';
            $formattedprice = $formatprice($amount, $currency);

            $pricesbycourse[$instance->courseid] = [
                'amount' => $amount,
                'label' => $formattedprice,
                'currency' => $currency,
            ];
        }
    }
}

$maketabid = static function(string $label, int $categoryid = 0): string {
    $slug = core_text::strtolower($label);
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    $slug = trim((string) $slug, '-');

    if ($slug === '') {
        $slug = 'category-' . $categoryid;
    }

    return 'course-tab-' . $slug;
};

foreach (array_values($homecourses) as $index => $course) {
    $context = context_course::instance($course->id);
    $image = \core_course\external\course_summary_exporter::get_course_image($course);
    $categoryname = trim((string) ($course->categoryname ?? ''));
    $categorylabel = $categoryname !== '' ? format_string($categoryname, true, [
        'context' => $context,
        'escape' => false,
    ]) : 'Uncategorised';
    $pricing = $pricesbycourse[$course->id] ?? [
        'amount' => 0,
        'label' => 'Free',
    ];

    if (empty($image)) {
        $image = $defaultimage;
    }

    // Calculate MRP (20% higher than price if price is not Free)
    $mrp = '';
    if (isset($pricing['amount']) && $pricing['amount'] > 0) {
        $mrp_amount = round($pricing['amount'] * 2.0, 2);
        $mrp = $formatprice($mrp_amount, $pricing['currency'] ?? 'INR');
    }

    $coursedata[] = [
        'name' => format_string($course->fullname, true, ['context' => $context, 'escape' => false]),
        'image' => $image,
        'url' => (new moodle_url('/enrol/index.php', ['id' => $course->id]))->out(false),
        'badge' => $badges[$index % count($badges)],
        'teacher' => 'Category: ' . $categorylabel,
        'stars' => '&#9733;&#9733;&#9733;&#9733;&#9733;',
        'categoryname' => $categorylabel,
        'price' => $pricing['label'],
        'mrp' => $mrp,
        'layoutclass' => $recommendedlayoutpattern[$index % count($recommendedlayoutpattern)],
    ];
}

$featuredcourseid = 15;
$featuredcourse = null;
$featuredcourserecord = $DB->get_record_sql("
    SELECT c.*, cc.name AS categoryname
    FROM {course} c
    LEFT JOIN {course_categories} cc ON cc.id = c.category
    WHERE c.id = :courseid
      AND c.visible = 1
      AND (cc.id IS NULL OR cc.visible = 1)
", ['courseid' => $featuredcourseid]);

if ($featuredcourserecord) {
    $featuredcontext = context_course::instance($featuredcourserecord->id);
    $featuredlist = new core_course_list_element($featuredcourserecord);
    $featuredimage = \core_course\external\course_summary_exporter::get_course_image($featuredcourserecord);
    $featuredpricing = $pricesbycourse[$featuredcourserecord->id] ?? null;
    $featuredsummary = trim(html_to_text(format_text(
        $featuredcourserecord->summary,
        $featuredcourserecord->summaryformat,
        ['context' => $featuredcontext, 'para' => false]
    )));
    $featuredcategory = trim((string) ($featuredcourserecord->categoryname ?? ''));
    $featuredcategory = $featuredcategory !== '' ? format_string($featuredcategory, true, [
        'context' => $featuredcontext,
        'escape' => false,
    ]) : 'Uncategorised';

    if (empty($featuredimage)) {
        $featuredimage = $defaultimage;
    }

    $featuredcontacts = $featuredlist->get_course_contacts();
    $featuredinstructor = '';
    if (!empty($featuredcontacts)) {
        $firstcontact = reset($featuredcontacts);
        $featuredinstructor = trim((string) ($firstcontact['username'] ?? ''));
    }

    $featuredcustomfields = [];
    foreach ($featuredlist->get_custom_fields() as $fielddata) {
        $featuredcustomfields[$fielddata->get_shortname()] = trim((string) $fielddata->get_value());
    }

    $featuredsubtitle = $featuredcustomfields['banner_subtitle'] ?? $shortentext($featuredsummary, 150);
    $featuredinstructorlabel = $featuredcustomfields['banner_instructor'] ?? ($featuredinstructor !== '' ? 'By ' . $featuredinstructor : '');
    $featuredupdatelabel = $featuredcustomfields['banner_update'] ?? '';
    if ($featuredupdatelabel === '') {
        $updatedtimestamp = !empty($featuredcourserecord->timemodified) ? (int) $featuredcourserecord->timemodified : (int) $featuredcourserecord->timecreated;
        if (!empty($updatedtimestamp)) {
            $featuredupdatelabel = 'Updated ' . userdate($updatedtimestamp, '%B %Y');
        }
    }

    $featuredprice = $featuredcustomfields['banner_price'] ?? ($featuredpricing['label'] ?? 'Free');
    $featuredmrp = $featuredcustomfields['banner_mrp'] ?? '';
    $featuredofferprice = $featuredcustomfields['banner_offer_price'] ?? ($featuredpricing['label'] ?? '');
    $featuredmeta = $featuredcustomfields['banner_meta'] ?? ('Category: ' . $featuredcategory);
    $featuredcustomsecondarytag = $featuredcustomfields['banner_secondary_tag'] ?? 'Popular';

    if ($featuredmrp === '' && !empty($featuredpricing['amount'])) {
        $featuredmrp = $formatprice(round($featuredpricing['amount'] * 2.0, 2), $featuredpricing['currency'] ?? 'INR');
    }

    $featuredcourse = [
        'name' => format_string($featuredcourserecord->fullname, true, ['context' => $featuredcontext, 'escape' => false]),
        'image' => $featuredimage,
        'url' => (new moodle_url('/enrol/index.php', ['id' => $featuredcourserecord->id]))->out(false),
        'subtitle' => $featuredsubtitle !== '' ? $featuredsubtitle : 'Course details will appear here after update.',
        'subtitlejs' => json_encode($featuredsubtitle !== '' ? $featuredsubtitle : 'Course details will appear here after update.'),
        'instructor' => $featuredinstructorlabel,
        'update' => $featuredupdatelabel,
        'meta' => $featuredmeta,
        'stars' => $featuredcustomfields['banner_rating'] ?? '&#9733;&#9733;&#9733;&#9733;&#9733;',
        'starsjs' => json_encode($featuredcustomfields['banner_rating'] ?? '&#9733;&#9733;&#9733;&#9733;&#9733;'),
        'primarytag' => $featuredcustomfields['banner_primary_tag'] ?? 'Featured',
        'secondarytag' => $featuredcustomsecondarytag,
        'mrp' => $featuredmrp,
        'offerprice' => $featuredofferprice,
        'price' => $featuredprice,
        'hasinstructor' => $featuredinstructorlabel !== '',
        'hasupdate' => $featuredupdatelabel !== '',
        'hasmeta' => $featuredmeta !== '',
        'haspricing' => $featuredmrp !== '' || $featuredofferprice !== '',
        'hasmrp' => $featuredmrp !== '',
        'hasofferprice' => $featuredofferprice !== '',
        'hassecondarytag' => $featuredcustomsecondarytag !== '',
    ];
}

$secondaryfeaturedcourseid = 19;
$secondaryfeaturedcourse = null;
$secondaryfeaturedcourserecord = $DB->get_record_sql("
    SELECT c.*, cc.name AS categoryname
    FROM {course} c
    LEFT JOIN {course_categories} cc ON cc.id = c.category
    WHERE c.id = :courseid
      AND c.visible = 1
      AND (cc.id IS NULL OR cc.visible = 1)
", ['courseid' => $secondaryfeaturedcourseid]);

if ($secondaryfeaturedcourserecord) {
    $secondaryfeaturedcontext = context_course::instance($secondaryfeaturedcourserecord->id);
    $secondaryfeaturedlist = new core_course_list_element($secondaryfeaturedcourserecord);
    $secondaryfeaturedimage = \core_course\external\course_summary_exporter::get_course_image($secondaryfeaturedcourserecord);
    if (empty($secondaryfeaturedimage)) {
        $secondaryfeaturedimage = $defaultimage;
    }
    $secondaryfeaturedpricing = $pricesbycourse[$secondaryfeaturedcourserecord->id] ?? null;
    $secondaryfeaturedsummary = trim(html_to_text(format_text(
        $secondaryfeaturedcourserecord->summary,
        $secondaryfeaturedcourserecord->summaryformat,
        ['context' => $secondaryfeaturedcontext, 'para' => false]
    )));
    $secondaryfeaturedcategory = trim((string) ($secondaryfeaturedcourserecord->categoryname ?? ''));
    $secondaryfeaturedcategory = $secondaryfeaturedcategory !== '' ? format_string($secondaryfeaturedcategory, true, [
        'context' => $secondaryfeaturedcontext,
        'escape' => false,
    ]) : 'Uncategorised';

    $secondaryfeaturedcontacts = $secondaryfeaturedlist->get_course_contacts();
    $secondaryfeaturedinstructor = '';
    if (!empty($secondaryfeaturedcontacts)) {
        $secondaryfirstcontact = reset($secondaryfeaturedcontacts);
        $secondaryfeaturedinstructor = trim((string) ($secondaryfirstcontact['username'] ?? ''));
    }

    $secondaryfeaturedcustomfields = [];
    foreach ($secondaryfeaturedlist->get_custom_fields() as $fielddata) {
        $secondaryfeaturedcustomfields[$fielddata->get_shortname()] = trim((string) $fielddata->get_value());
    }

    $secondaryfeaturedsubtitle = $secondaryfeaturedcustomfields['banner_subtitle'] ?? $shortentext($secondaryfeaturedsummary, 150);
    $secondaryfeaturedinstructorlabel = $secondaryfeaturedcustomfields['banner_instructor'] ??
        ($secondaryfeaturedinstructor !== '' ? 'By ' . $secondaryfeaturedinstructor : '');
    $secondaryfeaturedupdatelabel = $secondaryfeaturedcustomfields['banner_update'] ?? '';
    if ($secondaryfeaturedupdatelabel === '') {
        $secondaryupdatedtimestamp = !empty($secondaryfeaturedcourserecord->timemodified) ?
            (int) $secondaryfeaturedcourserecord->timemodified : (int) $secondaryfeaturedcourserecord->timecreated;
        if (!empty($secondaryupdatedtimestamp)) {
            $secondaryfeaturedupdatelabel = 'Updated ' . userdate($secondaryupdatedtimestamp, '%B %Y');
        }
    }

    $secondaryfeaturedprice = $secondaryfeaturedcustomfields['banner_price'] ?? ($secondaryfeaturedpricing['label'] ?? 'Free');
    $secondaryfeaturedmrp = $secondaryfeaturedcustomfields['banner_mrp'] ?? '';
    $secondaryfeaturedofferprice = $secondaryfeaturedcustomfields['banner_offer_price'] ??
        ($secondaryfeaturedpricing['label'] ?? '');
    $secondaryfeaturedmeta = $secondaryfeaturedcustomfields['banner_meta'] ??
        ('Category: ' . $secondaryfeaturedcategory);
    $secondaryfeaturedsecondarytag = $secondaryfeaturedcustomfields['banner_secondary_tag'] ?? 'Highest Rated';

    if ($secondaryfeaturedmrp === '' && !empty($secondaryfeaturedpricing['amount'])) {
        $secondaryfeaturedmrp = $formatprice(round($secondaryfeaturedpricing['amount'] * 2.0, 2),
            $secondaryfeaturedpricing['currency'] ?? 'INR');
    }

    $secondaryfeaturedcourse = [
        'name' => format_string($secondaryfeaturedcourserecord->fullname, true, [
            'context' => $secondaryfeaturedcontext,
            'escape' => false,
        ]),
        'url' => (new moodle_url('/enrol/index.php', ['id' => $secondaryfeaturedcourserecord->id]))->out(false),
        'image' => $secondaryfeaturedimage,
        'subtitle' => $secondaryfeaturedsubtitle !== '' ? $secondaryfeaturedsubtitle : 'Course details will appear here after update.',
        'instructor' => $secondaryfeaturedinstructorlabel,
        'update' => $secondaryfeaturedupdatelabel,
        'meta' => $secondaryfeaturedmeta,
        'stars' => $secondaryfeaturedcustomfields['banner_rating'] ?? '&#9733;&#9733;&#9733;&#9733;&#9733;',
        'primarytag' => $secondaryfeaturedcustomfields['banner_primary_tag'] ?? 'Premium',
        'secondarytag' => $secondaryfeaturedsecondarytag,
        'mrp' => $secondaryfeaturedmrp,
        'offerprice' => $secondaryfeaturedofferprice,
        'price' => $secondaryfeaturedprice,
        'hassubtitle' => $secondaryfeaturedsubtitle !== '',
        'hasinstructor' => $secondaryfeaturedinstructorlabel !== '',
        'hasupdate' => $secondaryfeaturedupdatelabel !== '',
        'hasmeta' => $secondaryfeaturedmeta !== '',
        'haspricing' => $secondaryfeaturedmrp !== '' || $secondaryfeaturedofferprice !== '',
        'hasmrp' => $secondaryfeaturedmrp !== '',
        'hasofferprice' => $secondaryfeaturedofferprice !== '',
        'hassecondarytag' => $secondaryfeaturedsecondarytag !== '',
    ];
}

$coursetabs = [];
$categorygroups = [];

foreach ($coursedata as $course) {
    $categorykey = $course['categoryname'];
    if (!isset($categorygroups[$categorykey])) {
        $categorygroups[$categorykey] = [
            'id' => $maketabid($categorykey),
            'name' => $categorykey,
            'courses' => [],
        ];
    }

    $categorygroups[$categorykey]['courses'][] = $course;
}

if (!empty($coursedata)) {
    $coursetabs[] = [
        'id' => 'course-tab-all',
        'name' => 'All',
        'active' => true,
        'courses' => $coursedata,
    ];

    foreach (array_values($categorygroups) as $group) {
        $coursetabs[] = [
            'id' => $group['id'],
            'name' => $group['name'],
            'active' => false,
            'courses' => $group['courses'],
        ];
    }
}

$sliceandwrap = static function(array $items, int $offset, int $length): array {
    if (empty($items)) {
        return [];
    }

    $count = count($items);
    $results = [];

    for ($i = 0; $i < $length; $i++) {
        $results[] = $items[($offset + $i) % $count];
    }

    return $results;
};


require_once(__DIR__ . '/classes/local/team_manager.php');

use theme_boost\local\team_manager;

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/home1', array_merge([
    'navcourses' => $navcoursedata,
    'featured_course' => $featuredcourse,
    'has_featured_course' => !empty($featuredcourse),
    'secondary_featured_course' => $secondaryfeaturedcourse,
    'has_secondary_featured_course' => !empty($secondaryfeaturedcourse),
    'recommendedcourses' => $sliceandwrap($coursedata, 0, min(6, max(1, count($coursedata)))),
    'has_recommendedcourses' => !empty($coursedata),
    'course_tabs' => $coursetabs,
    'has_course_tabs' => !empty($coursetabs),
], team_manager::export_for_template(3)));
echo $OUTPUT->footer();
