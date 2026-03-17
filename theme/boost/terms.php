<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/terms.php')); // Update path
$PAGE->set_title('PAYMENT TERMS & REFUND POLICY');
$PAGE->set_heading('PAYMENT TERMS & REFUND POLICY');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/terms', []);
echo $OUTPUT->footer();

?>
