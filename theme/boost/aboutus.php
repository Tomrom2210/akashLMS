<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/aboutus.php')); // Update path
$PAGE->set_title('About Us');
$PAGE->set_heading('About Us');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/aboutus', []);
echo $OUTPUT->footer();

?>
