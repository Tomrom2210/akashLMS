<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/privacy-policy.php')); // Update path
$PAGE->set_title('Privacy Policy');
$PAGE->set_heading('Privacy Policy');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/privacy-policy', []);
echo $OUTPUT->footer();

?>
