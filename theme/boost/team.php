<?php
require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/classes/local/team_manager.php');

use theme_boost\local\team_manager;

$pagecontent = team_manager::get_page_content();

$PAGE->set_context(context_system::instance());
$PAGE->set_url(new moodle_url('/theme/boost/team.php'));
$PAGE->set_title($pagecontent['heading'] ?: team_manager::text('teampagetitle'));
$PAGE->set_heading($pagecontent['heading'] ?: team_manager::text('teampagetitle'));

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/team', team_manager::export_for_template());
echo $OUTPUT->footer();
