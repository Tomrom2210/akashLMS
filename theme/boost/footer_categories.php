<?php
require_once(__DIR__ . '/../../config.php');

global $DB, $CFG;

defined('NO_DEBUG_DISPLAY') || define('NO_DEBUG_DISPLAY', true);

header('Content-Type: application/json; charset=utf-8');

$categories = $DB->get_records_sql("
    SELECT c.id, c.name
    FROM {course_categories} c
    LEFT JOIN {course_categories} p ON p.id = c.parent
    WHERE c.visible = 1
      AND (c.parent = 0 OR p.visible = 1)
    ORDER BY c.sortorder ASC, c.name ASC
", null, 0, 8);

$results = [];
foreach ($categories as $category) {
    $results[] = [
        'id' => (int) $category->id,
        'name' => format_string($category->name, true, [
            'context' => context_coursecat::instance($category->id),
            'escape' => false,
        ]),
        'url' => (new moodle_url('/course/index.php', ['categoryid' => $category->id]))->out(false),
    ];
}

echo json_encode([
    'categories' => $results,
    'wwwroot' => $CFG->wwwroot,
]);
