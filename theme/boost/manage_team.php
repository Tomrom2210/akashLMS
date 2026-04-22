<?php
require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/classes/local/team_manager.php');
require_once(__DIR__ . '/classes/form/team_member_form.php');

use theme_boost\form\team_member_form;
use theme_boost\local\team_manager;

require_once($CFG->libdir . '/adminlib.php');

admin_externalpage_setup('theme_boost_team');

$action = optional_param('action', 'list', PARAM_ALPHA);
$id = optional_param('id', '', PARAM_ALPHANUMEXT);

$baseurl = new moodle_url('/theme/boost/manage_team.php');
$PAGE->set_url($baseurl, ['action' => $action, 'id' => $id]);
$PAGE->set_pagelayout('admin');
$PAGE->set_title(team_manager::text('manageteam'));
$PAGE->set_heading(team_manager::text('manageteam'));

if ($action === 'delete' && $id !== '' && confirm_sesskey()) {
    team_manager::delete_member($id);
    redirect($baseurl, team_manager::text('teammemberdeleted'), null, \core\output\notification::NOTIFY_SUCCESS);
}

if (optional_param('formtype', '', PARAM_ALPHA) === 'pagecontent' && confirm_sesskey()) {
    team_manager::save_page_content([
        'eyebrow' => optional_param('eyebrow', '', PARAM_TEXT),
        'heading' => optional_param('heading', '', PARAM_TEXT),
        'intro' => optional_param('intro', '', PARAM_TEXT),
        'ctaheading' => optional_param('ctaheading', '', PARAM_TEXT),
        'ctacopy' => optional_param('ctacopy', '', PARAM_TEXT),
    ]);

    redirect($baseurl, team_manager::text('teampagecontentsaved'), null, \core\output\notification::NOTIFY_SUCCESS);
}

$member = [];
if ($action === 'edit' && $id !== '') {
    $member = team_manager::get_member($id) ?? [];
}

$form = null;
if (in_array($action, ['add', 'edit'], true)) {
    $formurlparams = ['action' => $action];
    if ($id !== '') {
        $formurlparams['id'] = $id;
    }

    $form = new team_member_form(new moodle_url('/theme/boost/manage_team.php', $formurlparams), [
        'member' => $member,
        'action' => $action,
    ]);

    if ($form->is_cancelled()) {
        redirect($baseurl);
    }

    if ($data = $form->get_data()) {
        $memberid = team_manager::save_member([
            'id' => $data->id,
            'name' => $data->name,
            'role' => $data->role,
            'bio' => $data->bio,
            'email' => $data->email,
            'phone' => $data->phone,
            'profileurl' => $data->profileurl,
            'sortorder' => $data->sortorder,
            'visible' => !empty($data->visible),
        ]);

        team_manager::save_image($memberid, (int)$data->image);

        redirect($baseurl, team_manager::text('teammembersaved'), null, \core\output\notification::NOTIFY_SUCCESS);
    }
}

$pagecontent = team_manager::get_page_content();
$members = team_manager::get_members(true);

echo $OUTPUT->header();

echo html_writer::tag('p', team_manager::text('manageteamdesc'), ['class' => 'text-muted mb-4']);

$actions = [];
$actions[] = html_writer::link(
    new moodle_url('/theme/boost/manage_team.php', ['action' => 'add']),
    team_manager::text('addteammember'),
    ['class' => 'btn btn-primary me-2']
);
$actions[] = html_writer::link(
    new moodle_url('/theme/boost/team.php'),
    team_manager::text('viewteampage'),
    ['class' => 'btn btn-outline-secondary']
);
echo html_writer::div(implode('', $actions), 'mb-4 d-flex flex-wrap gap-2');

echo html_writer::start_div('card mb-4');
echo html_writer::start_div('card-body');
echo html_writer::tag('h3', team_manager::text('teampagecontent'), ['class' => 'h5 mb-2']);
echo html_writer::tag('p', team_manager::text('teampageintro'), ['class' => 'text-muted']);
echo html_writer::start_tag('form', ['method' => 'post', 'action' => $baseurl->out(false)]);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'sesskey', 'value' => sesskey()]);
echo html_writer::empty_tag('input', ['type' => 'hidden', 'name' => 'formtype', 'value' => 'pagecontent']);

$fields = [
    ['name' => 'eyebrow', 'label' => team_manager::text('teampageeyebrowlabel'), 'value' => $pagecontent['eyebrow'], 'rows' => 1],
    ['name' => 'heading', 'label' => team_manager::text('teampageheadinglabel'), 'value' => $pagecontent['heading'], 'rows' => 2],
    ['name' => 'intro', 'label' => team_manager::text('teampageintrolabel'), 'value' => $pagecontent['intro'], 'rows' => 4],
    ['name' => 'ctaheading', 'label' => team_manager::text('teampagectaheadinglabel'), 'value' => $pagecontent['ctaheading'], 'rows' => 2],
    ['name' => 'ctacopy', 'label' => team_manager::text('teampagectacopylabel'), 'value' => $pagecontent['ctacopy'], 'rows' => 3],
];

foreach ($fields as $field) {
    echo html_writer::start_div('mb-3');
    echo html_writer::tag('label', s($field['label']), ['for' => 'id_' . $field['name'], 'class' => 'form-label fw-semibold']);
    echo html_writer::tag('textarea', s($field['value']), [
        'id' => 'id_' . $field['name'],
        'name' => $field['name'],
        'class' => 'form-control',
        'rows' => $field['rows'],
    ]);
    echo html_writer::end_div();
}

echo html_writer::tag('button', team_manager::text('savepagecontent'), ['type' => 'submit', 'class' => 'btn btn-primary']);
echo html_writer::end_tag('form');
echo html_writer::end_div();
echo html_writer::end_div();

if ($form) {
    $form->display();
    echo html_writer::empty_tag('hr', ['class' => 'my-4']);
}

if (empty($members)) {
    echo $OUTPUT->notification(team_manager::text('noteammembersconfigured'), \core\output\notification::NOTIFY_INFO);
} else {
    $rows = [];
    foreach ($members as $member) {
        $meta = [];
        if (!empty($member['role'])) {
            $meta[] = html_writer::span(s($member['role']), 'badge bg-light text-dark border me-2');
        }
        $meta[] = html_writer::span(
            $member['visible'] ? get_string('visible') : get_string('hidden'),
            'badge ' . ($member['visible'] ? 'bg-success' : 'bg-secondary')
        );

        $title = html_writer::tag('div', s($member['name']), ['class' => 'fw-bold']);
        $subtitle = html_writer::tag('div', implode('', $meta), ['class' => 'mt-1']);
        $editurl = new moodle_url('/theme/boost/manage_team.php', ['action' => 'edit', 'id' => $member['id']]);
        $deleteurl = new moodle_url('/theme/boost/manage_team.php', [
            'action' => 'delete',
            'id' => $member['id'],
            'sesskey' => sesskey(),
        ]);

        $links = html_writer::link($editurl, get_string('edit'), ['class' => 'btn btn-sm btn-outline-primary me-2']);
        $links .= html_writer::link($deleteurl, get_string('delete'), [
            'class' => 'btn btn-sm btn-outline-danger',
            'onclick' => 'return confirm(' . json_encode(team_manager::text('deleteteammemberconfirm', $member['name'])) . ');',
        ]);

        $rows[] = html_writer::tag('tr',
            html_writer::tag('td', (string)$member['sortorder']) .
            html_writer::tag('td', $title . $subtitle) .
            html_writer::tag('td', $links, ['class' => 'text-nowrap'])
        );
    }

    $thead = html_writer::tag('tr',
        html_writer::tag('th', team_manager::text('teammembersortorder')) .
        html_writer::tag('th', team_manager::text('teammembername')) .
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
