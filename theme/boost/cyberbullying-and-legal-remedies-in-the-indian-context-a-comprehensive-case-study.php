<?php
require_once(__DIR__ . '/../../config.php'); // Adjust path if needed

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/post-3.php')); // Update path
$PAGE->set_title('Blog Post');
$PAGE->set_heading('Blog Post');

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/post-3', []);
echo $OUTPUT->footer();

?>
