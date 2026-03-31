<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

global $DB;

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/home1.php')); // Update path
$PAGE->set_title('Home Page');

$navcourses = $DB->get_records_sql("
    SELECT id, fullname
    FROM {course}
    WHERE id <> 1 AND visible = 1
    ORDER BY timecreated DESC
", null, 0, 10);

$navcoursedata = [];
foreach ($navcourses as $course) {
    $navcoursedata[] = [
        'name' => format_string($course->fullname, true, ['context' => context_course::instance($course->id), 'escape' => false]),
        'url' => (new moodle_url('/enrol/index.php', ['id' => $course->id]))->out(false)
    ];
}

$homecourses = $DB->get_records_sql("
    SELECT id, fullname, summary, category, startdate
    FROM {course}
    WHERE id <> 1 AND visible = 1
    ORDER BY timecreated DESC
", null, 0, 12);

$badges = ['Top Rated', 'Trending', 'Core Skill', 'Career Track', 'Featured', 'Popular'];
$defaultimage = $CFG->wwwroot . '/media/new/s-m.jpg';
$coursedata = [];

foreach (array_values($homecourses) as $index => $course) {
    $context = context_course::instance($course->id);
    $image = \core_course\external\course_summary_exporter::get_course_image($course);

    if (empty($image)) {
        $image = $defaultimage;
    }

    $coursedata[] = [
        'name' => format_string($course->fullname, true, ['context' => $context, 'escape' => false]),
        'image' => $image,
        'url' => (new moodle_url('/enrol/index.php', ['id' => $course->id]))->out(false),
        'badge' => $badges[$index % count($badges)],
        'teacher' => 'eLearnKranti',
        'stars' => '★★★★★',
    ];
}

$sliceandwrap = function(array $items, int $offset, int $length): array {
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

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/home1', [
    'navcourses' => $navcoursedata,
    'recommendedcourses' => $sliceandwrap($coursedata, 0, min(6, max(1, count($coursedata)))),
    'explore_all_courses' => $sliceandwrap($coursedata, 0, min(4, max(1, count($coursedata)))),
    'explore_it_courses' => $sliceandwrap($coursedata, 0, min(3, max(1, count($coursedata)))),
    'explore_design_courses' => $sliceandwrap($coursedata, 3, min(3, max(1, count($coursedata)))),
    'explore_business_courses' => $sliceandwrap($coursedata, 6, min(3, max(1, count($coursedata)))),
    'explore_development_courses' => $sliceandwrap($coursedata, 9, min(3, max(1, count($coursedata)))),
    'explore_personal_courses' => $sliceandwrap($coursedata, 2, min(3, max(1, count($coursedata)))),
]);
echo $OUTPUT->footer();

?>
