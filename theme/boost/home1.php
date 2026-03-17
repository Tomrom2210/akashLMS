<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/home1.php')); // Update path
$PAGE->set_title('Home Page');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/home1', []);
echo $OUTPUT->footer();

?>
