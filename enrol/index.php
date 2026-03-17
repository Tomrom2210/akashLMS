<?php
require('../config.php');
require_once("$CFG->libdir/formslib.php");

use core_course\external\course_summary_exporter;

$id = required_param('id', PARAM_INT);
$returnurl = optional_param('returnurl', null, PARAM_LOCALURL);

if (!isloggedin()) {
    $referer = get_local_referer();
    if (empty($referer)) {
        $SESSION->wantsurl = "$CFG->wwwroot/course/view.php?id=$id";
    }
    redirect(get_login_url());
}

$course = $DB->get_record('course', ['id' => $id], '*', MUST_EXIST);
$context = context_course::instance($course->id, MUST_EXIST);

if ($course->id == SITEID) {
    redirect("$CFG->wwwroot/");
}

if (!$course->visible && !has_capability('moodle/course:viewhiddencourses', $context)) {
    throw new \moodle_exception('coursehidden');
}

$PAGE->set_course($course);
$PAGE->set_context($context->get_parent_context());
$PAGE->set_pagelayout('incourse');
$PAGE->set_url('/enrol/index.php', ['id' => $course->id]);
$PAGE->set_secondary_navigation(false);
$PAGE->add_body_class('limitedwidth');

if (\core\session\manager::is_loggedinas() && $USER->loginascontext->contextlevel == CONTEXT_COURSE) {
    throw new \moodle_exception('loginasnoenrol', '', $CFG->wwwroot.'/course/view.php?id='.$USER->loginascontext->instanceid);
}

if (!core_course_category::can_view_course_info($course) && !is_enrolled($context, $USER, '', true)) {
    throw new \moodle_exception('coursehidden', '', $CFG->wwwroot . '/');
}

// Already enrolled? Redirect to course.
if (is_enrolled($context, $USER, '', true)) {
    $destination = !empty($SESSION->wantsurl) ? $SESSION->wantsurl : "$CFG->wwwroot/course/view.php?id=$course->id";
    unset($SESSION->wantsurl);
    redirect($destination);
}

// Get enrol plugins/widgets
$enrols = enrol_get_plugins(true);
$enrolinstances = enrol_get_instances($course->id, true);
$widgets = [];
foreach ($enrolinstances as $instance) {
    if (!isset($enrols[$instance->enrol])) {
        continue;
    }
    $widget = $enrols[$instance->enrol]->enrol_page_hook($instance);
    if ($widget) {
        $widgets[$instance->id] = $widget;
    }
}

// Prepare course info
$summary = format_text($course->summary, FORMAT_HTML, ['context' => $context]);
$imageurl = course_summary_exporter::get_course_image($course);



// Get teachers
$teachers = [];
$roles = get_roles_used_in_context($context, true);
foreach ($roles as $role) {
    if ($role->shortname === 'editingteacher' || $role->shortname === 'teacher') {
        $users = get_role_users($role->id, $context, false, 'u.id, u.firstname, u.lastname');
        foreach ($users as $user) {
            $teachers[] = ['name' => fullname($user)];
        }
    }
}

// Template context
$templatecontext = [
    'fullname' => format_string($course->fullname),
    'summary' => $summary,
    'courseimage' => $imageurl,
    'price' => $price,
    'enrolurl' => (new moodle_url('/enrol/index.php', ['id' => $course->id]))->out(false),
    'teachers' => $teachers,
    'haswidgets' => !empty($widgets),
     'enrolwidgets' => array_values(array_map(function($widget) {
        return (string) $widget;
    }, $widgets))
];

$PAGE->set_title($course->shortname);
$PAGE->set_heading($course->fullname);
$PAGE->navbar->add(get_string('enrolmentoptions', 'enrol'));

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/course_enrol_landing', $templatecontext);
echo $OUTPUT->footer();
