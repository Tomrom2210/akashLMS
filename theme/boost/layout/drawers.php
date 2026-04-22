<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A drawer based layout for the boost theme.
 *
 * @package   theme_boost
 * @copyright 2021 Bas Brands
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/behat/lib.php');
require_once($CFG->dirroot . '/course/lib.php');
require_once($CFG->dirroot . '/theme/boost/classes/local/service_manager.php');

global $DB;

// Add block button in editing mode.
$addblockbutton = $OUTPUT->addblockbutton();

if (isloggedin()) {
    $courseindexopen = (get_user_preferences('drawer-open-index', true) == true);
    $blockdraweropen = (get_user_preferences('drawer-open-block') == true);
} else {
    $courseindexopen = false;
    $blockdraweropen = false;
}

if (defined('BEHAT_SITE_RUNNING') && get_user_preferences('behat_keep_drawer_closed') != 1) {
    $blockdraweropen = true;
}

$extraclasses = ['uses-drawers'];
if ($courseindexopen) {
    $extraclasses[] = 'drawer-open-index';
}

$blockshtml = $OUTPUT->blocks('side-pre');
$hasblocks = (strpos($blockshtml, 'data-block=') !== false || !empty($addblockbutton));
if (!$hasblocks) {
    $blockdraweropen = false;
}
$courseindex = core_course_drawer();
if ($PAGE->url && $PAGE->url->compare(new moodle_url('/enrol/index.php'), URL_MATCH_BASE)) {
    $courseindex = false;
}
if (!$courseindex) {
    $courseindexopen = false;
}

$bodyattributes = $OUTPUT->body_attributes($extraclasses);
$forceblockdraweropen = $OUTPUT->firstview_fakeblocks();

$secondarynavigation = false;
$overflow = '';
if ($PAGE->has_secondary_navigation()) {
    $tablistnav = $PAGE->has_tablist_secondary_navigation();
    $moremenu = new \core\navigation\output\more_menu($PAGE->secondarynav, 'nav-tabs', true, $tablistnav);
    $secondarynavigation = $moremenu->export_for_template($OUTPUT);
    $overflowdata = $PAGE->secondarynav->get_overflow_menu_data();
    if (!is_null($overflowdata)) {
        $overflow = $overflowdata->export_for_template($OUTPUT);
    }
}

$primary = new core\navigation\output\primary($PAGE);
$renderer = $PAGE->get_renderer('core');
$primarymenu = $primary->export_for_template($renderer);
$buildregionmainsettings = !$PAGE->include_region_main_settings_in_header_actions() && !$PAGE->has_secondary_navigation();
// If the settings menu will be included in the header then don't add it here.
$regionmainsettingsmenu = $buildregionmainsettings ? $OUTPUT->region_main_settings_menu() : false;

$header = $PAGE->activityheader;
$headercontent = $header->export_for_template($renderer);

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

$navcategories = $DB->get_records_sql("
    SELECT id, name
    FROM {course_categories}
    WHERE visible = 1
    ORDER BY sortorder ASC
", null, 0, 10);

$navcategoriesdata = [];
foreach ($navcategories as $category) {
    $navcategoriesdata[] = [
        'name' => format_string($category->name, true, ['context' => context_coursecat::instance($category->id), 'escape' => false]),
        'url' => (new moodle_url('/course/index.php', ['categoryid' => $category->id]))->out(false)
    ];
}

$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
    'output' => $OUTPUT,
    'loginurl' => (new moodle_url('/login/index.php'))->out(false),
    'forgotpasswordurl' => (new moodle_url('/login/forgot_password.php'))->out(false),
    'signupurl' => (new moodle_url('/login/signup.php'))->out(false),
    'logintoken' => \core\session\manager::get_login_token(),
    'isloggedinuser' => isloggedin() && !isguestuser(),
    'showloginbutton' => !isloggedin() || isguestuser(),
    'logouturl' => (new moodle_url('/login/logout.php', ['sesskey' => sesskey()]))->out(false),
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'bodyattributes' => $bodyattributes,
    'courseindexopen' => $courseindexopen,
    'blockdraweropen' => $blockdraweropen,
    'courseindex' => $courseindex,
    'primarymoremenu' => $primarymenu['moremenu'],
    'secondarymoremenu' => $secondarynavigation ?: false,
    'mobileprimarynav' => $primarymenu['mobileprimarynav'],
    'usermenu' => $primarymenu['user'],
    'langmenu' => $primarymenu['lang'],
    'forceblockdraweropen' => $forceblockdraweropen,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
    'overflow' => $overflow,
    'headercontent' => $headercontent,
    'addblockbutton' => $addblockbutton,
    'navcourses' => $navcoursedata,
    'navcategories' => $navcategoriesdata,
    'navservices' => \theme_boost\local\service_manager::get_nav_services()
];

echo $OUTPUT->render_from_template('theme_boost/drawers', $templatecontext);
