<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/contact.php')); // Update path
$PAGE->set_title('Contact');
$PAGE->set_heading('Contact');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/contact', []);
echo $OUTPUT->footer();

?>