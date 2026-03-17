<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/cancellation-and-refunds.php')); // Update path
$PAGE->set_title('Cancellation & Refunds');
$PAGE->set_heading('Cancellation & Refunds');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/cancellation-and-refunds', []);
echo $OUTPUT->footer();

?>
