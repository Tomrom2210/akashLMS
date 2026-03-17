<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/shipping.php')); // Update path
$PAGE->set_title('Shipping');
$PAGE->set_heading('Shipping');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/shipping', []);
echo $OUTPUT->footer();

?>
