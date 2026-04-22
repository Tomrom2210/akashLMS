<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

namespace theme_boost\form;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

use theme_boost\local\service_manager;

/**
 * Public service inquiry form.
 *
 * @package theme_boost
 */
class service_inquiry_form extends \moodleform {
    /**
     * Form definition.
     *
     * @return void
     */
    public function definition(): void {
        global $USER;

        $mform = $this->_form;
        $service = (array)($this->_customdata['service'] ?? []);

        $mform->addElement('text', 'fullname', service_manager::text('serviceinquiryfullname'), ['size' => 40]);
        $mform->setType('fullname', PARAM_TEXT);
        $mform->addRule('fullname', null, 'required', null, 'client');

        $mform->addElement('text', 'emailaddress', service_manager::text('serviceinquiryemail'), ['size' => 40]);
        $mform->setType('emailaddress', PARAM_EMAIL);
        $mform->addRule('emailaddress', null, 'required', null, 'client');

        $mform->addElement('text', 'phonenumber', service_manager::text('serviceinquiryphone'), ['size' => 30]);
        $mform->setType('phonenumber', PARAM_TEXT);
        $mform->addRule('phonenumber', null, 'required', null, 'client');

        $mform->addElement('select', 'serviceid', service_manager::text('serviceinquiryservice'),
            service_manager::get_service_select_options());
        $mform->setType('serviceid', PARAM_ALPHANUMEXT);
        $mform->addRule('serviceid', null, 'required', null, 'client');

        $mform->addElement('textarea', 'message', service_manager::text('serviceinquirymessage'), ['rows' => 5, 'cols' => 60]);
        $mform->setType('message', PARAM_TEXT);
        $mform->addRule('message', null, 'required', null, 'client');

        $this->add_action_buttons(false, service_manager::text('serviceinquirysubmit'));

        $this->set_data([
            'serviceid' => $service['id'] ?? '',
            'fullname' => fullname($USER, true),
            'emailaddress' => $USER->email ?? '',
        ]);
    }

    /**
     * Validation.
     *
     * @param array $data
     * @param array $files
     * @return array
     */
    public function validation($data, $files): array {
        $errors = parent::validation($data, $files);

        if (!empty($data['emailaddress']) && !validate_email($data['emailaddress'])) {
            $errors['emailaddress'] = service_manager::text('serviceinquiryemailinvalid');
        }

        return $errors;
    }
}
