<?php
namespace theme_boost\output;

use renderable;
use templatable;
use stdClass;

class course_tiles implements renderable, templatable {
    public function export_for_template(\renderer_base $output) {
        global $DB;

        $courses = $DB->get_records_sql("
            SELECT id, fullname, summary, summaryformat, visible
            FROM {course}
            WHERE id != 1 AND visible = 1
            ORDER BY timecreated DESC
            LIMIT 4
        ");

        $data = [];
        foreach ($courses as $course) {
            $context = \context_course::instance($course->id);
            $fs = get_file_storage();
            $imageurl = $output->image_url('i/course')->out(false);

            // Try to get summary image
            $files = $fs->get_area_files($context->id, 'course', 'summary', false, 'sortorder', false);
            foreach ($files as $file) {
                $imageurl = \moodle_url::make_pluginfile_url(
                    $file->get_contextid(), $file->get_component(), $file->get_filearea(),
                    $file->get_itemid(), $file->get_filepath(), $file->get_filename()
                )->out(false);
                break;
            }

            $data[] = [
                'title' => format_string($course->fullname),
                'image' => $imageurl,
                'url' => (new \moodle_url('/course/view.php', ['id' => $course->id]))->out(false),
            ];
        }

        return (object)[
            'courses' => $data
        ];
    }
}
