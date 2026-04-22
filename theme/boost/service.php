<?php
require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/classes/local/service_manager.php');
require_once(__DIR__ . '/classes/form/service_inquiry_form.php');

use theme_boost\form\service_inquiry_form;
use theme_boost\local\service_manager;

$slug = optional_param('service', '', PARAM_ALPHANUMEXT);
if ($slug === '' && !empty($_SERVER['PATH_INFO'])) {
    $slug = clean_param(trim((string)$_SERVER['PATH_INFO'], '/'), PARAM_ALPHANUMEXT);
}

if ($slug === '') {
    throw new \moodle_exception('invalidparameter');
}

$service = service_manager::get_service_by_slug($slug);

if (!$service) {
    throw new \moodle_exception('invalidparameter');
}

$serviceurl = service_manager::get_service_url($service);

$PAGE->set_context(context_system::instance());
$PAGE->set_url($serviceurl);
$PAGE->set_title($service['title']);
$PAGE->set_heading($service['title']);

$context = service_manager::export_service_detail_for_template($service);
$form = new service_inquiry_form($serviceurl, [
    'service' => $service,
]);

if ($data = $form->get_data()) {
    $payload = (array)$data;
    if (service_manager::send_service_inquiry($service, $payload)) {
        redirect($PAGE->url, service_manager::text('serviceinquirysuccess'), null, \core\output\notification::NOTIFY_SUCCESS);
    }

    redirect($PAGE->url, service_manager::text('serviceinquiryerror'), null, \core\output\notification::NOTIFY_ERROR);
}

ob_start();
$form->display();
$context['inquiryformhtml'] = ob_get_clean();

echo $OUTPUT->header();
echo $OUTPUT->render_from_template('theme_boost/service_detail', $context);
echo $OUTPUT->footer();
