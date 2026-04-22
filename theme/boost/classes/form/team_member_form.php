<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace theme_boost\form;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

use theme_boost\local\team_manager;

/**
 * Team member management form.
 *
 * @package   theme_boost
 */
class team_member_form extends \moodleform {
    /**
     * Form definition.
     *
     * @return void
     */
    public function definition(): void {
        $mform = $this->_form;
        $member = (array)($this->_customdata['member'] ?? []);
        $currentaction = (string)($this->_customdata['action'] ?? '');

        $member['image'] = team_manager::prepare_image_draft_itemid($member, 'image');

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_ALPHANUMEXT);

        $mform->addElement('hidden', 'action', $currentaction);
        $mform->setType('action', PARAM_ALPHA);

        $mform->addElement('text', 'name', team_manager::text('teammembername'), ['size' => 40]);
        $mform->setType('name', PARAM_TEXT);
        $mform->addRule('name', null, 'required', null, 'client');

        $mform->addElement('text', 'role', team_manager::text('teammemberrole'), ['size' => 40]);
        $mform->setType('role', PARAM_TEXT);
        $mform->addRule('role', null, 'required', null, 'client');

        $mform->addElement('textarea', 'bio', team_manager::text('teammemberbio'), ['rows' => 5, 'cols' => 60]);
        $mform->setType('bio', PARAM_TEXT);

        $mform->addElement('text', 'email', team_manager::text('teammemberemail'), ['size' => 40]);
        $mform->setType('email', PARAM_EMAIL);

        $mform->addElement('text', 'phone', team_manager::text('teammemberphone'), ['size' => 30]);
        $mform->setType('phone', PARAM_TEXT);

        $mform->addElement('text', 'profileurl', team_manager::text('teammemberprofileurl'), ['size' => 60]);
        $mform->setType('profileurl', PARAM_URL);

        $mform->addElement('text', 'sortorder', team_manager::text('teammembersortorder'), ['size' => 8]);
        $mform->setType('sortorder', PARAM_INT);

        $mform->addElement('advcheckbox', 'visible', team_manager::text('teammembervisible'));
        $mform->setDefault('visible', 1);

        $existingimageurl = team_manager::get_member_image_url($member);
        if (!empty($existingimageurl)) {
            $previewhtml = \html_writer::empty_tag('img', [
                'src' => $existingimageurl,
                'alt' => $member['name'] ?? team_manager::text('teammemberimage'),
                'style' => 'max-width: 220px; width: 100%; height: auto; border-radius: 12px; border: 1px solid #d9e2ff; display: block;',
            ]);
            $mform->addElement('static', 'current_image', team_manager::text('teammemberimagepreview'), $previewhtml);
        }

        $mform->addElement(
            'filemanager',
            'image',
            team_manager::text('teammemberimage'),
            null,
            ['subdirs' => 0, 'maxfiles' => 1, 'accepted_types' => ['image'], 'return_types' => FILE_INTERNAL]
        );
        $mform->addElement('static', 'imagehelp', '', team_manager::text('teammemberimagehelp'));

        $this->add_action_buttons(true, team_manager::text('saveteammember'));

        if (!empty($member)) {
            $this->set_data($member);
        }
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

        if (!empty($data['email']) && !validate_email($data['email'])) {
            $errors['email'] = get_string('invalidemail');
        }

        if (!empty($data['profileurl']) && !preg_match('#^https?://#', trim($data['profileurl']))) {
            $errors['profileurl'] = get_string('invalidurl');
        }

        return $errors;
    }
}
