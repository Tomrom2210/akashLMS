<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

global $DB;

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/home1.php')); // Update path
$PAGE->set_title('Home Page');

$navcourses = $DB->get_records_sql("
    SELECT id, fullname
    FROM {course}
    WHERE id <> 1
    ORDER BY timecreated DESC
", null, 0, 10);

$navcoursedata = [];
foreach ($navcourses as $course) {
    $navcoursedata[] = [
        'name' => format_string($course->fullname, true, ['context' => context_course::instance($course->id), 'escape' => false]),
        'url' => (new moodle_url('/course/view.php', ['id' => $course->id]))->out(false)
    ];
}

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/home1', [
    'navcourses' => $navcoursedata
]);
echo $OUTPUT->footer();

?>
