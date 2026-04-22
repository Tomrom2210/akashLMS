<?php
require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/classes/local/service_manager.php');
require_once(__DIR__ . '/classes/form/service_form.php');

use theme_boost\form\service_form;
use theme_boost\local\service_manager;

require_once($CFG->libdir . '/adminlib.php');

admin_externalpage_setup('theme_boost_services');

$action = optional_param('action', 'list', PARAM_ALPHA);
$id = optional_param('id', '', PARAM_ALPHANUMEXT);

$baseurl = new moodle_url('/theme/boost/manage_services.php');
$PAGE->set_url($baseurl, ['action' => $action, 'id' => $id]);
$PAGE->set_pagelayout('admin');
$PAGE->set_title(service_manager::text('manageservices'));
$PAGE->set_heading(service_manager::text('manageservices'));

if ($action === 'delete' && $id !== '' && confirm_sesskey()) {
    service_manager::delete_service($id);
    redirect($baseurl, service_manager::text('servicedeleted'), null, \core\output\notification::NOTIFY_SUCCESS);
}

if ($action === 'restoredefaults' && confirm_sesskey()) {
    service_manager::restore_defaults();
    redirect($baseurl, service_manager::text('servicesrestored'), null, \core\output\notification::NOTIFY_SUCCESS);
}

$service = [];
if ($action === 'edit' && $id !== '') {
    $service = service_manager::get_service($id) ?? [];
}

$form = null;
if (in_array($action, ['add', 'edit'], true)) {
    $formurlparams = ['action' => $action];
    if ($id !== '') {
        $formurlparams['id'] = $id;
    }
    $form = new service_form(new moodle_url('/theme/boost/manage_services.php', $formurlparams), [
        'service' => $service,
        'action' => $action,
    ]);

    if ($form->is_cancelled()) {
        redirect($baseurl);
    }

    if ($data = $form->get_data()) {
        $serviceid = service_manager::save_service([
            'id' => $data->id,
            'badge' => $data->badge,
            'ctatext' => $data->ctatext,
            'ctaurl' => $data->ctaurl,
            'sortorder' => $data->sortorder,
            'visible' => !empty($data->visible),
            'detailheroheading' => $data->detailheroheading,
            'detailherocopy' => $data->detailherocopy,
            'detailheroitems' => preg_split('/\r\n|\r|\n/', (string)$data->detailheroitems),
            'overvieweyebrow' => $data->overvieweyebrow,
            'overviewheading' => $data->overviewheading,
            'overviewcopy' => $data->overviewcopy,
            'overviewpoints' => preg_split('/\r\n|\r|\n/', (string)$data->overviewpoints),
            'metricslabel' => $data->metricslabel,
            'metricsheading' => $data->metricsheading,
            'metricscopy' => $data->metricscopy,
            'metriconevalue' => $data->metriconevalue,
            'metriconelabel' => $data->metriconelabel,
            'metrictwovalue' => $data->metrictwovalue,
            'metrictwolabel' => $data->metrictwolabel,
            'metricthreevalue' => $data->metricthreevalue,
            'metricthreelabel' => $data->metricthreelabel,
            'metricfourvalue' => $data->metricfourvalue,
            'metricfourlabel' => $data->metricfourlabel,
            'supportlabel' => $data->supportlabel,
            'supportheading' => $data->supportheading,
            'supportcopy' => $data->supportcopy,
            'supportcardonetitle' => $data->supportcardonetitle,
            'supportcardonedescription' => $data->supportcardonedescription,
            'supportcardtwotitle' => $data->supportcardtwotitle,
            'supportcardtwodescription' => $data->supportcardtwodescription,
            'supportcardthreetitle' => $data->supportcardthreetitle,
            'supportcardthreedescription' => $data->supportcardthreedescription,
            'supportcardfourtitle' => $data->supportcardfourtitle,
            'supportcardfourdescription' => $data->supportcardfourdescription,
            'faqeyebrow' => $data->faqeyebrow,
            'faqheading' => $data->faqheading,
            'faqonequestion' => $data->faqonequestion,
            'faqoneanswer' => $data->faqoneanswer_editor['text'] ?? '',
            'faqtwoquestion' => $data->faqtwoquestion,
            'faqtwoanswer' => $data->faqtwoanswer_editor['text'] ?? '',
            'faqthreequestion' => $data->faqthreequestion,
            'faqthreeanswer' => $data->faqthreeanswer_editor['text'] ?? '',
            'faqfourquestion' => $data->faqfourquestion,
            'faqfouranswer' => $data->faqfouranswer_editor['text'] ?? '',
            'preforminquirycontent' => $data->preforminquirycontent_editor['text'] ?? '',
        ]);

        service_manager::save_detail_image($serviceid, (int)$data->heroimage, 'serviceheroimage');
        service_manager::save_detail_image($serviceid, (int)$data->overviewimage, 'serviceoverviewimage');
        service_manager::save_detail_image($serviceid, (int)$data->metricsimage, 'servicemetricsimage');
        service_manager::save_detail_image($serviceid, (int)$data->faqimage, 'servicefaqimage');

        redirect($baseurl, service_manager::text('servicesaved'), null, \core\output\notification::NOTIFY_SUCCESS);
    }
}

$services = service_manager::get_services(true);

echo $OUTPUT->header();

echo html_writer::tag('p', service_manager::text('manageservicesdesc'), ['class' => 'text-muted mb-4']);

$actions = [];
$actions[] = html_writer::link(
    new moodle_url('/theme/boost/manage_services.php', ['action' => 'add']),
    service_manager::text('addservice'),
    ['class' => 'btn btn-primary me-2']
);
$actions[] = html_writer::link(
    new moodle_url('/theme/boost/manage_services.php', ['action' => 'restoredefaults', 'sesskey' => sesskey()]),
    service_manager::text('restoredefaultservices'),
    [
        'class' => 'btn btn-outline-danger',
        'onclick' => 'return confirm(' . json_encode(service_manager::text('restoredefaultservicesconfirm')) . ');',
    ]
);

echo html_writer::div(implode('', $actions), 'mb-4 d-flex flex-wrap gap-2');

if ($form) {
    $form->display();
    echo html_writer::empty_tag('hr', ['class' => 'my-4']);
}

if (empty($services)) {
    echo $OUTPUT->notification(service_manager::text('noservicesconfigured'), \core\output\notification::NOTIFY_INFO);
} else {
    $rows = [];
    foreach ($services as $service) {
        $badges = [];
        $badges[] = html_writer::span(s($service['badge']), 'badge bg-light text-dark border me-2');
        $badges[] = html_writer::span(
            $service['visible'] ? get_string('visible') : get_string('hidden'),
            'badge ' . ($service['visible'] ? 'bg-success' : 'bg-secondary')
        );

        $title = html_writer::tag('div', s($service['badge']), ['class' => 'fw-bold']);
        $meta = html_writer::tag('div', implode('', array_slice($badges, 1)), ['class' => 'mt-1']);
        $editurl = new moodle_url('/theme/boost/manage_services.php', ['action' => 'edit', 'id' => $service['id']]);
        $deleteurl = new moodle_url('/theme/boost/manage_services.php', [
            'action' => 'delete',
            'id' => $service['id'],
            'sesskey' => sesskey(),
        ]);

        $links = html_writer::link($editurl, get_string('edit'), ['class' => 'btn btn-sm btn-outline-primary me-2']);
        $links .= html_writer::link($deleteurl, get_string('delete'), [
            'class' => 'btn btn-sm btn-outline-danger',
            'onclick' => 'return confirm(' . json_encode(service_manager::text('deleteserviceconfirm', $service['badge'])) . ');',
        ]);

        $rows[] = html_writer::tag('tr',
            html_writer::tag('td', (string)$service['sortorder']) .
            html_writer::tag('td', $title . $meta) .
            html_writer::tag('td', $links, ['class' => 'text-nowrap'])
        );
    }

    $thead = html_writer::tag('tr',
        html_writer::tag('th', service_manager::text('servicesortorder')) .
        html_writer::tag('th', service_manager::text('servicebadge')) .
        html_writer::tag('th', get_string('actions'))
    );

    echo html_writer::start_div('table-responsive');
    echo html_writer::tag('table',
        html_writer::tag('thead', $thead) . html_writer::tag('tbody', implode('', $rows)),
        ['class' => 'table table-striped table-hover']
    );
    echo html_writer::end_div();
}

echo $OUTPUT->footer();
