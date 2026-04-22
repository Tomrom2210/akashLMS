<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/terms.php')); // Update path
$PAGE->set_title('Education & Social Impact');
$PAGE->set_heading('Education & Social Impact');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/education-social-impact', []);
echo $OUTPUT->footer();

?>
