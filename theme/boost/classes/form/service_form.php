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

use theme_boost\local\service_manager;

/**
 * Service management form.
 *
 * @package   theme_boost
 */
class service_form extends \moodleform {
    /**
     * Form definition.
     *
     * @return void
     */
    public function definition(): void {
        $mform = $this->_form;
        $service = (array)($this->_customdata['service'] ?? []);
        $currentaction = (string)($this->_customdata['action'] ?? '');
        $editoroptions = $this->get_editor_options();

        $service['heroimage'] = service_manager::prepare_detail_image_draft_itemid($service, 'heroimage', 'serviceheroimage');
        $service['overviewimage'] = service_manager::prepare_detail_image_draft_itemid($service, 'overviewimage', 'serviceoverviewimage');
        $service['metricsimage'] = service_manager::prepare_detail_image_draft_itemid($service, 'metricsimage', 'servicemetricsimage');
        $service['faqimage'] = service_manager::prepare_detail_image_draft_itemid($service, 'faqimage', 'servicefaqimage');

        $mform->addElement('hidden', 'id');
        $mform->setType('id', PARAM_ALPHANUMEXT);

        $mform->addElement('hidden', 'action', $currentaction);
        $mform->setType('action', PARAM_ALPHA);

        $mform->addElement('text', 'badge', service_manager::text('servicebadge'), ['size' => 40]);
        $mform->setType('badge', PARAM_TEXT);
        $mform->addRule('badge', null, 'required', null, 'client');

        $mform->addElement('text', 'ctatext', service_manager::text('servicectatext'), ['size' => 40]);
        $mform->setType('ctatext', PARAM_TEXT);

        $mform->addElement('text', 'ctaurl', service_manager::text('servicectaurl'), ['size' => 60]);
        $mform->setType('ctaurl', PARAM_TEXT);

        $mform->addElement('text', 'sortorder', service_manager::text('servicesortorder'), ['size' => 8]);
        $mform->setType('sortorder', PARAM_INT);

        $mform->addElement('advcheckbox', 'visible', service_manager::text('servicevisible'));
        $mform->setDefault('visible', 1);

        $mform->addElement('header', 'detailherohdr', 'Hero section');
        $mform->addElement('textarea', 'detailheroheading', service_manager::text('detailheroheadinglabel'), ['rows' => 2, 'cols' => 60]);
        $mform->setType('detailheroheading', PARAM_TEXT);
        $mform->addElement('textarea', 'detailherocopy', service_manager::text('detailherocopylabel'), ['rows' => 4, 'cols' => 60]);
        $mform->setType('detailherocopy', PARAM_TEXT);
        $mform->addElement('textarea', 'detailheroitems', service_manager::text('detailheroitemslabel'), ['rows' => 5, 'cols' => 60]);
        $mform->setType('detailheroitems', PARAM_TEXT);
        $mform->addElement('static', 'detailheroitemshelp', '', service_manager::text('detailheroitemshelp'));
        $this->add_image_field($mform, $service, 'heroimage', 'heroimage', 'serviceheroimageupload', 'serviceheroimagehelp');

        $mform->addElement('header', 'overviewhdr', 'Overview section');
        $mform->addElement('text', 'overvieweyebrow', service_manager::text('overvieweyebrowlabel'), ['size' => 40]);
        $mform->setType('overvieweyebrow', PARAM_TEXT);
        $mform->addElement('textarea', 'overviewheading', service_manager::text('overviewheadinglabel'), ['rows' => 2, 'cols' => 60]);
        $mform->setType('overviewheading', PARAM_TEXT);
        $mform->addElement('textarea', 'overviewcopy', service_manager::text('overviewcopylabel'), ['rows' => 4, 'cols' => 60]);
        $mform->setType('overviewcopy', PARAM_TEXT);
        $mform->addElement('textarea', 'overviewpoints', service_manager::text('overviewpointslabel'), ['rows' => 5, 'cols' => 60]);
        $mform->setType('overviewpoints', PARAM_TEXT);
        $mform->addElement('static', 'overviewpointshelp', '', service_manager::text('overviewpointshelp'));
        $this->add_image_field($mform, $service, 'overviewimage', 'overviewimage', 'serviceoverviewimageupload', 'serviceoverviewimagehelp');

        $mform->addElement('header', 'metricshdr', 'Metrics section');
        $mform->addElement('text', 'metricslabel', service_manager::text('metricslabeltext'), ['size' => 40]);
        $mform->setType('metricslabel', PARAM_TEXT);
        $mform->addElement('textarea', 'metricsheading', service_manager::text('metricsheadingtext'), ['rows' => 2, 'cols' => 60]);
        $mform->setType('metricsheading', PARAM_TEXT);
        $mform->addElement('textarea', 'metricscopy', service_manager::text('metricscopytext'), ['rows' => 3, 'cols' => 60]);
        $mform->setType('metricscopy', PARAM_TEXT);
        $this->add_metric_pair($mform, 'metriconevalue', 'metriconelabel');
        $this->add_metric_pair($mform, 'metrictwovalue', 'metrictwolabel');
        $this->add_metric_pair($mform, 'metricthreevalue', 'metricthreelabel');
        $this->add_metric_pair($mform, 'metricfourvalue', 'metricfourlabel');
        $this->add_image_field($mform, $service, 'metricsimage', 'metricsimage', 'servicemetricsimageupload', 'servicemetricsimagehelp');

        $mform->addElement('header', 'supporthdr', 'Support section');
        $mform->addElement('text', 'supportlabel', service_manager::text('supportlabeltext'), ['size' => 40]);
        $mform->setType('supportlabel', PARAM_TEXT);
        $mform->addElement('textarea', 'supportheading', service_manager::text('supportheadingtext'), ['rows' => 2, 'cols' => 60]);
        $mform->setType('supportheading', PARAM_TEXT);
        $mform->addElement('textarea', 'supportcopy', service_manager::text('supportcopytext'), ['rows' => 3, 'cols' => 60]);
        $mform->setType('supportcopy', PARAM_TEXT);
        $this->add_support_card_fields($mform, 'one');
        $this->add_support_card_fields($mform, 'two');
        $this->add_support_card_fields($mform, 'three');
        $this->add_support_card_fields($mform, 'four');
        $mform->addElement('header', 'faqhdr', 'FAQ section');
        $mform->addElement('text', 'faqeyebrow', service_manager::text('faqeyebrowlabel'), ['size' => 40]);
        $mform->setType('faqeyebrow', PARAM_TEXT);
        $mform->addElement('textarea', 'faqheading', service_manager::text('faqheadinglabel'), ['rows' => 2, 'cols' => 60]);
        $mform->setType('faqheading', PARAM_TEXT);
        $this->add_faq_fields($mform, 'one', $editoroptions);
        $this->add_faq_fields($mform, 'two', $editoroptions);
        $this->add_faq_fields($mform, 'three', $editoroptions);
        $this->add_faq_fields($mform, 'four', $editoroptions);
        $this->add_image_field($mform, $service, 'faqimage', 'faqimage', 'servicefaqimageupload', 'servicefaqimagehelp');

        $mform->addElement('header', 'preforminquiryhdr', 'Content before inquiry form');
        $mform->addElement('editor', 'preforminquirycontent_editor', service_manager::text('preforminquirycontentlabel'),
            null, $editoroptions);

        $this->add_action_buttons(true, service_manager::text('saveservice'));

        if (!empty($service)) {
            $service['detailheroitems'] = $this->implode_lines($service['detailheroitems'] ?? []);
            $service['overviewpoints'] = $this->implode_lines($service['overviewpoints'] ?? []);
            $service['preforminquirycontent_editor'] = $this->prepare_editor_data($service['preforminquirycontent'] ?? '');
            foreach (['one', 'two', 'three', 'four'] as $suffix) {
                $service['faq' . $suffix . 'answer_editor'] = $this->prepare_editor_data($service['faq' . $suffix . 'answer'] ?? '');
            }
            $this->set_data($service);
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

        if (!empty($data['ctaurl']) && !preg_match('#^(https?://|/)#', trim($data['ctaurl']))) {
            $errors['ctaurl'] = service_manager::text('servicectaurlerror');
        }

        return $errors;
    }

    /**
     * Add image preview and upload field.
     *
     * @param \MoodleQuickForm $mform
     * @param array $service
     * @param string $elementname
     * @param string $slot
     * @param string $labelkey
     * @param string $helpname
     * @return void
     */
    protected function add_image_field(\MoodleQuickForm $mform, array $service, string $elementname, string $slot,
            string $labelkey, string $helpname): void {
        $existingimageurl = service_manager::get_service_detail_image_url($service, $slot);

        if (!empty($existingimageurl)) {
            $previewmap = [
                'heroimage' => service_manager::text('serviceheroimagepreview'),
                'overviewimage' => service_manager::text('serviceoverviewimagepreview'),
                'metricsimage' => service_manager::text('servicemetricsimagepreview'),
                'faqimage' => service_manager::text('servicefaqimagepreview'),
            ];
            $previewhtml = \html_writer::empty_tag('img', [
                'src' => $existingimageurl,
                'alt' => $service['badge'] ?? service_manager::text($labelkey),
                'style' => 'max-width: 220px; width: 100%; height: auto; border-radius: 12px; border: 1px solid #d9e2ff; display: block;',
            ]);
            $mform->addElement('static', 'current_' . $elementname, $previewmap[$slot] ?? 'Current image', $previewhtml);
        }

        $mform->addElement(
            'filemanager',
            $elementname,
            service_manager::text($labelkey),
            null,
            ['subdirs' => 0, 'maxfiles' => 1, 'accepted_types' => ['image'], 'return_types' => FILE_INTERNAL]
        );
        $mform->addElement('static', $helpname, '', service_manager::text('servicedetailimagehelp'));
    }

    /**
     * Add a metric value/label pair.
     *
     * @param \MoodleQuickForm $mform
     * @param string $valuekey
     * @param string $labelkey
     * @return void
     */
    protected function add_metric_pair(\MoodleQuickForm $mform, string $valuekey, string $labelkey): void {
        $mform->addElement('text', $valuekey, service_manager::text($valuekey), ['size' => 20]);
        $mform->setType($valuekey, PARAM_TEXT);
        $mform->addElement('text', $labelkey, service_manager::text($labelkey), ['size' => 40]);
        $mform->setType($labelkey, PARAM_TEXT);
    }

    /**
     * Add support card fields.
     *
     * @param \MoodleQuickForm $mform
     * @param string $suffix
     * @return void
     */
    protected function add_support_card_fields(\MoodleQuickForm $mform, string $suffix): void {
        $titlekey = 'supportcard' . $suffix . 'title';
        $descriptionkey = 'supportcard' . $suffix . 'description';
        $mform->addElement('text', $titlekey, service_manager::text($titlekey), ['size' => 50]);
        $mform->setType($titlekey, PARAM_TEXT);
        $mform->addElement('textarea', $descriptionkey, service_manager::text($descriptionkey), ['rows' => 2, 'cols' => 60]);
        $mform->setType($descriptionkey, PARAM_TEXT);
    }

    /**
     * Add FAQ fields.
     *
     * @param \MoodleQuickForm $mform
     * @param string $suffix
     * @return void
     */
    protected function add_faq_fields(\MoodleQuickForm $mform, string $suffix, array $editoroptions): void {
        $questionkey = 'faq' . $suffix . 'question';
        $answerkey = 'faq' . $suffix . 'answer_editor';
        $mform->addElement('text', $questionkey, service_manager::text($questionkey), ['size' => 60]);
        $mform->setType($questionkey, PARAM_TEXT);
        $mform->addElement('editor', $answerkey, service_manager::text('faq' . $suffix . 'answer'), null, $editoroptions);
    }

    /**
     * Editor options for service rich text fields.
     *
     * @return array
     */
    protected function get_editor_options(): array {
        return [
            'maxfiles' => 0,
            'maxbytes' => 0,
            'trusttext' => false,
            'context' => \context_system::instance(),
        ];
    }

    /**
     * Prepare saved html for a Moodle editor element.
     *
     * @param string $value
     * @return array
     */
    protected function prepare_editor_data(string $value): array {
        return [
            'text' => $value,
            'format' => FORMAT_HTML,
            'itemid' => 0,
        ];
    }

    /**
     * Convert list data to textarea string.
     *
     * @param mixed $value
     * @return string
     */
    protected function implode_lines($value): string {
        if (!is_array($value)) {
            return (string)$value;
        }

        return implode(PHP_EOL, $value);
    }
}
