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

namespace theme_boost\local;

defined('MOODLE_INTERNAL') || die();

/**
 * Services manager for the custom services page.
 *
 * @package   theme_boost
 */
class service_manager {
    /** @var string */
    public const CONFIG_KEY = 'servicesdata';
    /** @var string */
    public const FILEAREA = 'serviceimage';
    /** @var string */
    public const PAGE_CONFIG_KEY = 'servicespagecontent';
    /** @var array */
    protected const DETAIL_IMAGE_AREAS = [
        'heroimage' => 'serviceheroimage',
        'overviewimage' => 'serviceoverviewimage',
        'metricsimage' => 'servicemetricsimage',
        'supportimage' => 'servicesupportimage',
        'faqimage' => 'servicefaqimage',
        'ctaimage' => 'servicectaimage',
    ];

    /**
     * Fallback labels for the services feature.
     *
     * @param string $key
     * @param mixed $a
     * @return string
     */
    public static function text(string $key, $a = null): string {
        $strings = [
            'addservice' => 'Add service',
            'contactus' => 'Contact us',
            'deleteserviceconfirm' => 'Delete the service "{$a}"?',
            'editservice' => 'Edit service',
            'exploreservices' => 'Explore services',
            'manageservices' => 'Manage services',
            'manageservicesdesc' => 'Add, edit, hide, reorder, or delete the service cards shown on the public Services page.',
            'noservicesconfigured' => 'No services are configured yet.',
            'restoredefaultservices' => 'Restore default services',
            'restoredefaultservicesconfirm' => 'Restore the original three service entries from the provided documents?',
            'saveservice' => 'Save service',
            'servicebadge' => 'Service name',
            'servicectaurl' => 'CTA URL',
            'servicectaurlerror' => 'Use a full URL starting with http/https, or a site-relative path starting with /.',
            'servicectatext' => 'CTA button text',
            'servicedeleted' => 'Service deleted successfully.',
            'servicedetailcontent' => 'Service detail page content',
            'servicedetailcontentdesc' => 'Control every section of the individual service page from the backend.',
            'detailheroheadinglabel' => 'Detail hero heading',
            'detailherocopylabel' => 'Detail hero description',
            'detailheroitemslabel' => 'Hero highlight points',
            'detailheroitemshelp' => 'Enter one hero highlight per line.',
            'overvieweyebrowlabel' => 'Overview label',
            'overviewheadinglabel' => 'Overview heading',
            'overviewcopylabel' => 'Overview description',
            'overviewpointslabel' => 'Overview points',
            'overviewpointshelp' => 'Enter one overview point per line.',
            'metricslabeltext' => 'Metrics section label',
            'metricsheadingtext' => 'Metrics section heading',
            'metricscopytext' => 'Metrics section description',
            'metriconevalue' => 'Metric 1 value',
            'metriconelabel' => 'Metric 1 label',
            'metrictwovalue' => 'Metric 2 value',
            'metrictwolabel' => 'Metric 2 label',
            'metricthreevalue' => 'Metric 3 value',
            'metricthreelabel' => 'Metric 3 label',
            'metricfourvalue' => 'Metric 4 value',
            'metricfourlabel' => 'Metric 4 label',
            'supportlabeltext' => 'Support section label',
            'supportheadingtext' => 'Support section heading',
            'supportcopytext' => 'Support section description',
            'supportcardonetitle' => 'Support card 1 title',
            'supportcardonedescription' => 'Support card 1 description',
            'supportcardtwotitle' => 'Support card 2 title',
            'supportcardtwodescription' => 'Support card 2 description',
            'supportcardthreetitle' => 'Support card 3 title',
            'supportcardthreedescription' => 'Support card 3 description',
            'supportcardfourtitle' => 'Support card 4 title',
            'supportcardfourdescription' => 'Support card 4 description',
            'faqeyebrowlabel' => 'FAQ label',
            'faqheadinglabel' => 'FAQ heading',
            'faqonequestion' => 'FAQ 1 question',
            'faqoneanswer' => 'FAQ 1 answer',
            'faqtwoquestion' => 'FAQ 2 question',
            'faqtwoanswer' => 'FAQ 2 answer',
            'faqthreequestion' => 'FAQ 3 question',
            'faqthreeanswer' => 'FAQ 3 answer',
            'faqfourquestion' => 'FAQ 4 question',
            'faqfouranswer' => 'FAQ 4 answer',
            'preforminquirycontentlabel' => 'More content before inquiry form',
            'detailctalabel' => 'CTA label',
            'detailctaheading' => 'CTA heading',
            'detailctacopy' => 'CTA description',
            'serviceheroimageupload' => 'Upload hero image',
            'serviceheroimagepreview' => 'Current hero image',
            'serviceoverviewimageupload' => 'Upload overview image',
            'serviceoverviewimagepreview' => 'Current overview image',
            'servicemetricsimageupload' => 'Upload metrics image',
            'servicemetricsimagepreview' => 'Current metrics image',
            'servicesupportimageupload' => 'Upload support image',
            'servicesupportimagepreview' => 'Current support image',
            'servicefaqimageupload' => 'Upload FAQ image',
            'servicefaqimagepreview' => 'Current FAQ image',
            'servicectaimageupload' => 'Upload CTA image',
            'servicectaimagepreview' => 'Current CTA image',
            'servicedetailimagehelp' => 'Upload an image for this section. If left empty, the page will use the main service image where available.',
            'serviceinquirytitle' => 'Request This Service',
            'serviceinquirycopy' => 'Tell us what you need and our team will contact you about this service.',
            'serviceinquiryfullname' => 'Full name',
            'serviceinquiryemail' => 'Email address',
            'serviceinquiryemailinvalid' => 'Enter a valid email address.',
            'serviceinquiryphone' => 'Phone number',
            'serviceinquiryservice' => 'Service',
            'serviceinquirymessage' => 'Your requirement',
            'serviceinquirysubmit' => 'Send inquiry',
            'serviceinquirysuccess' => 'Your service inquiry was sent successfully.',
            'serviceinquiryerror' => 'We could not send your inquiry right now. Please try again in a moment.',
            'serviceinquiryemailsubject' => 'New service inquiry: {$a}',
            'servicehomebutton' => 'Back to Home',
            'servicepagecontent' => 'Page content',
            'servicepagecontentdesc' => 'Manage the hero section and featured service shown at the top of the Services page.',
            'savepagecontent' => 'Save page content',
            'pagecontentsaved' => 'Page content saved successfully.',
            'heroeyebrowlabel' => 'Hero eyebrow',
            'heroheadinglabel' => 'Hero heading',
            'herocopylabel' => 'Hero description',
            'primaryctatextlabel' => 'Primary button text',
            'primaryctaurllabel' => 'Primary button URL',
            'secondaryctatextlabel' => 'Secondary button text',
            'secondaryctaurllabel' => 'Secondary button URL',
            'statonevaluelabel' => 'First stat value',
            'statonelabel' => 'First stat label',
            'stattwovaluelabel' => 'Second stat value',
            'stattwolabel' => 'Second stat label',
            'statthreevaluelabel' => 'Third stat value',
            'statthreelabel' => 'Third stat label',
            'featuredservicelabel' => 'Featured service on right side',
            'sectionlabeltext' => 'Portfolio section label',
            'sectionheadingtext' => 'Portfolio section heading',
            'sectionsubcopytext' => 'Portfolio section subcopy',
            'processlabeltext' => 'Process section label',
            'processheadingtext' => 'Process section heading',
            'ctalabeltext' => 'Bottom CTA label',
            'ctaheadingtext' => 'Bottom CTA heading',
            'ctacopytext' => 'Bottom CTA description',
            'services' => 'Services',
            'servicesadminhint' => 'Need to add or reorder services? Use the Manage services screen in Theme settings.',
            'servicesaved' => 'Service saved successfully.',
            'servicesbenefit1desc' => 'Services are grouped for learners, organisations, and social-impact partners in one clear experience.',
            'servicesbenefit1title' => 'Purpose-built support',
            'servicesbenefit2desc' => 'Every card can be edited from the backend so new offerings appear automatically on the page.',
            'servicesbenefit2title' => 'Dynamic from admin',
            'servicesbenefit3desc' => 'The design keeps full service information on one page, so visitors do not need a separate detail page.',
            'servicesbenefit3title' => 'No extra clicks',
            'servicescountlabel' => '{$a} active services',
            'servicescoverage' => 'Support across education, advisory, and compliance',
            'servicesctacopy' => 'Tell us what you need and we will help you choose the right service, package, or next step.',
            'servicesctaheading' => 'Need help choosing the right service?',
            'servicesctalabel' => 'Let\'s Talk',
            'serviceseyebrow' => 'Our Services',
            'servicesheroheading' => 'Practical services built for learners, institutions, and growing organisations.',
            'servicesherocopy' => 'Explore our backend-managed service offerings, from personalised counselling to professional advisory and social-impact education support. Every service on this page can be added or updated directly from the admin side.',
            'servicesmentoring' => 'Focused guidance and execution support',
            'servicespagetitle' => 'Services',
            'servicesprocessheading' => 'How we support every engagement',
            'servicesprocesslabel' => 'How It Works',
            'servicesrestored' => 'Default services restored successfully.',
            'servicessectionheading' => 'What we currently offer',
            'servicessectionlabel' => 'Service Portfolio',
            'servicessectionsubcopy' => 'These cards are rendered dynamically from the backend. Add a new service in admin and it will appear here automatically.',
            'servicesortorder' => 'Sort order',
            'servicesstep1desc' => 'We understand the learner, business, or institution context before recommending the right service.',
            'servicesstep1title' => 'Understand the need',
            'servicesstep2desc' => 'We shape the support plan, package, and execution steps around the actual objective.',
            'servicesstep2title' => 'Design the right path',
            'servicesstep3desc' => 'We stay focused on clarity, compliance, and measurable progress from start to finish.',
            'servicesstep3title' => 'Deliver with confidence',
            'servicevisible' => 'Visible on Services page',
            'viewservicespage' => 'View services page',
        ];

        $text = $strings[$key] ?? $key;
        if ($a !== null) {
            $text = str_replace('{$a}', (string)$a, $text);
        }

        return $text;
    }

    /**
     * Return all configured services.
     *
     * @param bool $includehidden
     * @return array
     */
    public static function get_services(bool $includehidden = true): array {
        $stored = get_config('theme_boost', self::CONFIG_KEY);
        $services = [];

        if (!empty($stored)) {
            $decoded = json_decode($stored, true);
            if (is_array($decoded)) {
                foreach ($decoded as $service) {
                    $services[] = self::normalise_service((array)$service);
                }
            }
        }

        if (empty($services)) {
            $services = self::get_default_services();
            self::save_services($services);
        }

        usort($services, static function(array $left, array $right): int {
            return ($left['sortorder'] <=> $right['sortorder']) ?: strcmp($left['title'], $right['title']);
        });

        if (!$includehidden) {
            $services = array_values(array_filter($services, static function(array $service): bool {
                return !empty($service['visible']);
            }));
        }

        return $services;
    }

    /**
     * Get a single service by id.
     *
     * @param string $id
     * @return array|null
     */
    public static function get_service(string $id): ?array {
        foreach (self::get_services(true) as $service) {
            if ($service['id'] === $id) {
                return $service;
            }
        }

        return null;
    }

    /**
     * Save one service.
     *
     * @param array $data
     * @return string
     */
    public static function save_service(array $data): string {
        $services = self::get_services(true);
        $existingmatch = [];
        foreach ($services as $existing) {
            if (!empty($data['id']) && $existing['id'] === $data['id']) {
                $existingmatch = $existing;
                break;
            }
        }
        $service = self::normalise_service(array_merge($existingmatch, $data));

        if (empty($service['id'])) {
            $service['id'] = self::generate_id();
        }

        $updated = false;
        foreach ($services as $index => $existing) {
            if ($existing['id'] === $service['id']) {
                $services[$index] = $service;
                $updated = true;
                break;
            }
        }

        if (!$updated) {
            $services[] = $service;
        }

        self::save_services($services);
        return $service['id'];
    }

    /**
     * Delete a service by id.
     *
     * @param string $id
     * @return void
     */
    public static function delete_service(string $id): void {
        if ($id !== '') {
            $fs = get_file_storage();
            $fs->delete_area_files(\context_system::instance()->id, 'theme_boost', self::FILEAREA, self::get_service_itemid($id));
            foreach (self::DETAIL_IMAGE_AREAS as $filearea) {
                $fs->delete_area_files(\context_system::instance()->id, 'theme_boost', $filearea, self::get_service_itemid($id));
            }
        }

        $services = array_values(array_filter(self::get_services(true), static function(array $service) use ($id): bool {
            return $service['id'] !== $id;
        }));

        self::save_services($services);
    }

    /**
     * Restore the default services.
     *
     * @return void
     */
    public static function restore_defaults(): void {
        self::save_services(self::get_default_services());
    }

    /**
     * Build public template data.
     *
     * @return array
     */
    public static function export_for_template(): array {
        $services = self::get_services(false);
        $pagecontent = self::get_page_content();
        $count = count($services);
        $first = self::get_featured_service($services, $pagecontent['featuredserviceid']);
        $cards = [];
        foreach ($services as $index => $service) {
            $cards[] = [
                'id' => $service['id'],
                'slug' => $service['slug'],
                'badge' => $service['badge'],
                'sortorder' => $service['sortorder'],
                'ctaurl' => $service['ctaurl'],
                'ctatext' => $service['ctatext'],
                'accentclass' => self::get_accent_class($index),
                'initials' => self::build_initials($service['badge']),
                'detailurl' => self::get_service_url($service),
            ];
        }

        return [
            'eyebrow' => $pagecontent['eyebrow'],
            'heroheading' => $pagecontent['heroheading'],
            'herocopy' => $pagecontent['herocopy'],
            'contactlabel' => $pagecontent['primaryctatext'],
            'explorelabel' => $pagecontent['secondaryctatext'],
            'services' => $cards,
            'hasservices' => !empty($cards),
            'servicecount' => $count,
            'servicecountlabel' => str_replace('{count}', (string)$count, $pagecontent['statonelabel']),
            'servicecountvalue' => $pagecontent['statonevalue'],
            'coveragelabel' => $pagecontent['stattwolabel'],
            'coveragevalue' => $pagecontent['stattwovalue'],
            'mentoringlabel' => $pagecontent['statthreelabel'],
            'mentoringvalue' => $pagecontent['statthreevalue'],
            'contacturl' => $pagecontent['primaryctaurl'],
            'exploreurl' => $pagecontent['secondaryctaurl'],
            'manageurl' => (new \moodle_url('/theme/boost/manage_services.php'))->out(false),
            'hasfeatured' => !empty($first),
            'featuredbadge' => $first['badge'] ?? self::text('serviceseyebrow'),
            'featuredctatext' => $first['ctatext'] ?? self::text('contactus'),
            'featuredctaurl' => $first['ctaurl'] ?? (new \moodle_url('/theme/boost/contact.php'))->out(false),
            'sectionlabel' => $pagecontent['sectionlabel'],
            'sectionheading' => $pagecontent['sectionheading'],
            'sectionsubcopy' => $pagecontent['sectionsubcopy'],
            'processlabel' => $pagecontent['processlabel'],
            'processheading' => $pagecontent['processheading'],
            'ctalabel' => $pagecontent['ctalabel'],
            'ctaheading' => $pagecontent['ctaheading'],
            'ctacopy' => $pagecontent['ctacopy'],
            'managebuttonlabel' => self::text('manageservices'),
            'benefits' => [
                ['title' => self::text('servicesbenefit1title'),
                    'description' => self::text('servicesbenefit1desc')],
                ['title' => self::text('servicesbenefit2title'),
                    'description' => self::text('servicesbenefit2desc')],
                ['title' => self::text('servicesbenefit3title'),
                    'description' => self::text('servicesbenefit3desc')],
            ],
            'supportsteps' => [
                ['number' => '01', 'title' => self::text('servicesstep1title'),
                    'description' => self::text('servicesstep1desc')],
                ['number' => '02', 'title' => self::text('servicesstep2title'),
                    'description' => self::text('servicesstep2desc')],
                ['number' => '03', 'title' => self::text('servicesstep3title'),
                    'description' => self::text('servicesstep3desc')],
            ],
            'adminhint' => is_siteadmin() ? self::text('servicesadminhint') : '',
            'showadminhint' => is_siteadmin(),
        ];
    }

    /**
     * Get editable page content configuration.
     *
     * @return array
     */
    public static function get_page_content(): array {
        $defaults = [
            'eyebrow' => self::text('serviceseyebrow'),
            'heroheading' => self::text('servicesheroheading'),
            'herocopy' => self::text('servicesherocopy'),
            'primaryctatext' => self::text('contactus'),
            'primaryctaurl' => (new \moodle_url('/theme/boost/contact.php'))->out(false),
            'secondaryctatext' => self::text('exploreservices'),
            'secondaryctaurl' => '#tp-services-grid',
            'statonevalue' => '3',
            'statonelabel' => '{count} active services',
            'stattwovalue' => '360°',
            'stattwolabel' => self::text('servicescoverage'),
            'statthreevalue' => '1:1',
            'statthreelabel' => self::text('servicesmentoring'),
            'featuredserviceid' => 'service-career-counselling',
            'sectionlabel' => self::text('servicessectionlabel'),
            'sectionheading' => self::text('servicessectionheading'),
            'sectionsubcopy' => self::text('servicessectionsubcopy'),
            'processlabel' => self::text('servicesprocesslabel'),
            'processheading' => self::text('servicesprocessheading'),
            'ctalabel' => self::text('servicesctalabel'),
            'ctaheading' => self::text('servicesctaheading'),
            'ctacopy' => self::text('servicesctacopy'),
        ];

        $stored = get_config('theme_boost', self::PAGE_CONFIG_KEY);
        if (empty($stored)) {
            return $defaults;
        }

        $decoded = json_decode($stored, true);
        if (!is_array($decoded)) {
            return $defaults;
        }

        return array_merge($defaults, $decoded);
    }

    /**
     * Save editable page content configuration.
     *
     * @param array $data
     * @return void
     */
    public static function save_page_content(array $data): void {
        $current = self::get_page_content();
        $allowedkeys = array_keys($current);
        $clean = [];
        foreach ($allowedkeys as $key) {
            $clean[$key] = trim((string)($data[$key] ?? $current[$key]));
        }
        set_config(self::PAGE_CONFIG_KEY, json_encode($clean, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'theme_boost');
    }

    /**
     * Build options for the featured service selector.
     *
     * @return array
     */
    public static function get_featured_service_options(): array {
        $options = [];
        foreach (self::get_services(true) as $service) {
            $options[$service['id']] = $service['badge'];
        }
        return $options;
    }

    /**
     * Return featured service by id, falling back to first visible service.
     *
     * @param array $services
     * @param string $serviceid
     * @return array|null
     */
    protected static function get_featured_service(array $services, string $serviceid): ?array {
        foreach ($services as $service) {
            if ($service['id'] === $serviceid) {
                return $service;
            }
        }
        return $services[0] ?? null;
    }

    /**
     * Save the full services list.
     *
     * @param array $services
     * @return void
     */
    protected static function save_services(array $services): void {
        $normalised = [];
        foreach ($services as $service) {
            $normalised[] = self::normalise_service($service);
        }

        usort($normalised, static function(array $left, array $right): int {
            return ($left['sortorder'] <=> $right['sortorder']) ?: strcmp($left['badge'], $right['badge']);
        });

        set_config(self::CONFIG_KEY, json_encode(array_values($normalised), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), 'theme_boost');
    }

    /**
     * Normalise one service record.
     *
     * @param array $service
     * @return array
     */
    protected static function normalise_service(array $service): array {
        $badge = trim((string)($service['badge'] ?? $service['title'] ?? self::text('serviceseyebrow')));
        $title = $badge;
        $id = trim((string)($service['id'] ?? ''));
        $defaults = self::get_default_detail_content([
            'id' => $id,
            'title' => $title,
        ]);

        return [
            'id' => $id,
            'slug' => trim((string)($service['slug'] ?? self::build_slug($title, $id))),
            'badge' => $badge,
            'title' => $title,
            'ctatext' => trim((string)($service['ctatext'] ?? self::text('contactus'))),
            'ctaurl' => trim((string)($service['ctaurl'] ?? (new \moodle_url('/theme/boost/contact.php'))->out(false))),
            'sortorder' => clean_param($service['sortorder'] ?? 0, PARAM_INT),
            'visible' => !empty($service['visible']),
            'detailheroheading' => trim((string)($service['detailheroheading'] ?? $defaults['detailheroheading'])),
            'detailherocopy' => trim((string)($service['detailherocopy'] ?? $defaults['detailherocopy'])),
            'detailheroitems' => self::normalise_multiline_list($service['detailheroitems'] ?? $defaults['detailheroitems']),
            'overvieweyebrow' => trim((string)($service['overvieweyebrow'] ?? $defaults['overvieweyebrow'])),
            'overviewheading' => trim((string)($service['overviewheading'] ?? $defaults['overviewheading'])),
            'overviewcopy' => trim((string)($service['overviewcopy'] ?? $defaults['overviewcopy'])),
            'overviewpoints' => self::normalise_multiline_list($service['overviewpoints'] ?? $defaults['overviewpoints']),
            'metricslabel' => trim((string)($service['metricslabel'] ?? $defaults['metricslabel'])),
            'metricsheading' => trim((string)($service['metricsheading'] ?? $defaults['metricsheading'])),
            'metricscopy' => trim((string)($service['metricscopy'] ?? $defaults['metricscopy'])),
            'metriconevalue' => trim((string)($service['metriconevalue'] ?? $defaults['metriconevalue'])),
            'metriconelabel' => trim((string)($service['metriconelabel'] ?? $defaults['metriconelabel'])),
            'metrictwovalue' => trim((string)($service['metrictwovalue'] ?? $defaults['metrictwovalue'])),
            'metrictwolabel' => trim((string)($service['metrictwolabel'] ?? $defaults['metrictwolabel'])),
            'metricthreevalue' => trim((string)($service['metricthreevalue'] ?? $defaults['metricthreevalue'])),
            'metricthreelabel' => trim((string)($service['metricthreelabel'] ?? $defaults['metricthreelabel'])),
            'metricfourvalue' => trim((string)($service['metricfourvalue'] ?? $defaults['metricfourvalue'])),
            'metricfourlabel' => trim((string)($service['metricfourlabel'] ?? $defaults['metricfourlabel'])),
            'supportlabel' => trim((string)($service['supportlabel'] ?? $defaults['supportlabel'])),
            'supportheading' => trim((string)($service['supportheading'] ?? $defaults['supportheading'])),
            'supportcopy' => trim((string)($service['supportcopy'] ?? $defaults['supportcopy'])),
            'supportcardonetitle' => trim((string)($service['supportcardonetitle'] ?? $defaults['supportcardonetitle'])),
            'supportcardonedescription' => trim((string)($service['supportcardonedescription'] ?? $defaults['supportcardonedescription'])),
            'supportcardtwotitle' => trim((string)($service['supportcardtwotitle'] ?? $defaults['supportcardtwotitle'])),
            'supportcardtwodescription' => trim((string)($service['supportcardtwodescription'] ?? $defaults['supportcardtwodescription'])),
            'supportcardthreetitle' => trim((string)($service['supportcardthreetitle'] ?? $defaults['supportcardthreetitle'])),
            'supportcardthreedescription' => trim((string)($service['supportcardthreedescription'] ?? $defaults['supportcardthreedescription'])),
            'supportcardfourtitle' => trim((string)($service['supportcardfourtitle'] ?? $defaults['supportcardfourtitle'])),
            'supportcardfourdescription' => trim((string)($service['supportcardfourdescription'] ?? $defaults['supportcardfourdescription'])),
            'faqeyebrow' => trim((string)($service['faqeyebrow'] ?? $defaults['faqeyebrow'])),
            'faqheading' => trim((string)($service['faqheading'] ?? $defaults['faqheading'])),
            'faqonequestion' => trim((string)($service['faqonequestion'] ?? $defaults['faqonequestion'])),
            'faqoneanswer' => trim((string)($service['faqoneanswer'] ?? $defaults['faqoneanswer'])),
            'faqtwoquestion' => trim((string)($service['faqtwoquestion'] ?? $defaults['faqtwoquestion'])),
            'faqtwoanswer' => trim((string)($service['faqtwoanswer'] ?? $defaults['faqtwoanswer'])),
            'faqthreequestion' => trim((string)($service['faqthreequestion'] ?? $defaults['faqthreequestion'])),
            'faqthreeanswer' => trim((string)($service['faqthreeanswer'] ?? $defaults['faqthreeanswer'])),
            'faqfourquestion' => trim((string)($service['faqfourquestion'] ?? $defaults['faqfourquestion'])),
            'faqfouranswer' => trim((string)($service['faqfouranswer'] ?? $defaults['faqfouranswer'])),
            'preforminquirycontent' => trim((string)($service['preforminquirycontent'] ?? $defaults['preforminquirycontent'])),
            'detailctalabel' => trim((string)($service['detailctalabel'] ?? $defaults['detailctalabel'])),
            'detailctaheading' => trim((string)($service['detailctaheading'] ?? $defaults['detailctaheading'])),
            'detailctacopy' => trim((string)($service['detailctacopy'] ?? $defaults['detailctacopy'])),
        ];
    }

    /**
     * Default services used for initial rendering and restore defaults.
     *
     * @return array
     */
    protected static function get_default_services(): array {
        return [
            [
                'id' => 'service-career-counselling',
                'slug' => 'career-counselling',
                'badge' => 'Career Counselling',
                'title' => 'Career Counselling',
                'ctatext' => 'Book a Session',
                'ctaurl' => (new \moodle_url('/theme/boost/contact.php'))->out(false),
                'sortorder' => 10,
                'visible' => true,
            ],
            [
                'id' => 'service-professional-services',
                'slug' => 'professional-services',
                'badge' => 'Professional Services for Growth & Compliance',
                'title' => 'Professional Services for Growth & Compliance',
                'ctatext' => 'Talk to Our Team',
                'ctaurl' => (new \moodle_url('/theme/boost/contact.php'))->out(false),
                'sortorder' => 20,
                'visible' => true,
            ],
            [
                'id' => 'service-social-impact',
                'slug' => 'education-social-impact',
                'badge' => 'Education & Social Impact Initiatives',
                'title' => 'Education & Social Impact Initiatives',
                'ctatext' => 'Partner With Us',
                'ctaurl' => (new \moodle_url('/theme/boost/contact.php'))->out(false),
                'sortorder' => 30,
                'visible' => true,
            ],
        ];
    }

    /**
     * Generate a new unique id.
     *
     * @return string
     */
    protected static function generate_id(): string {
        return 'service-' . bin2hex(random_bytes(6));
    }

    /**
     * Build a slug for URLs.
     *
     * @param string $title
     * @param string $fallback
     * @return string
     */
    protected static function build_slug(string $title, string $fallback = ''): string {
        $slug = strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $title), '-'));
        if ($slug === '') {
            $slug = strtolower(trim(preg_replace('/[^a-z0-9]+/i', '-', $fallback), '-'));
        }
        return $slug ?: 'service';
    }

    /**
     * Build one service URL.
     *
     * @param array $service
     * @return string
     */
    public static function get_service_url(array $service): string {
        return (new \moodle_url('/theme/boost/service/' . rawurlencode($service['slug'])))->out(false);
    }

    /**
     * Return the first visible service URL, or site home if none exist.
     *
     * @return string
     */
    public static function get_default_service_url(): string {
        $services = self::get_services(false);
        if (!empty($services[0])) {
            return self::get_service_url($services[0]);
        }

        return (new \moodle_url('/'))->out(false);
    }

    /**
     * Nav service links for menus.
     *
     * @return array
     */
    public static function get_nav_services(): array {
        $items = [];
        foreach (self::get_services(false) as $service) {
            $items[] = [
                'name' => $service['badge'],
                'url' => self::get_service_url($service),
            ];
        }
        return $items;
    }

    /**
     * Build service select options for forms.
     *
     * @return array
     */
    public static function get_service_select_options(): array {
        $options = [];
        foreach (self::get_services(false) as $service) {
            $options[$service['id']] = $service['badge'];
        }
        return $options;
    }

    /**
     * Lookup one service by slug.
     *
     * @param string $slug
     * @return array|null
     */
    public static function get_service_by_slug(string $slug): ?array {
        foreach (self::get_services(true) as $service) {
            if ($service['slug'] === $slug) {
                return $service;
            }
        }
        return null;
    }

    /**
     * Export detail page context.
     *
     * @param array $service
     * @return array
     */
    public static function export_service_detail_for_template(array $service): array {
        $heroimage = self::get_service_detail_image_url($service, 'heroimage');
        $overviewimage = self::get_service_detail_image_url($service, 'overviewimage');
        $metricsimage = self::get_service_detail_image_url($service, 'metricsimage');
        $supportimage = self::get_service_detail_image_url($service, 'supportimage');
        $faqimage = self::get_service_detail_image_url($service, 'faqimage');
        $ctaimage = self::get_service_detail_image_url($service, 'ctaimage');

        return [
            'badge' => $service['badge'],
            'heroimageurl' => $heroimage,
            'hasheroimage' => !empty($heroimage),
            'overviewimageurl' => $overviewimage,
            'hasoverviewimage' => !empty($overviewimage),
            'metricsimageurl' => $metricsimage,
            'hasmetricsimage' => !empty($metricsimage),
            'supportimageurl' => $supportimage,
            'hassupportimage' => !empty($supportimage),
            'faqimageurl' => $faqimage,
            'hasfaqimage' => !empty($faqimage),
            'ctaimageurl' => $ctaimage,
            'hasctaimage' => !empty($ctaimage),
            'contacturl' => (new \moodle_url('/theme/boost/contact.php'))->out(false),
            'servicesurl' => self::get_default_service_url(),
            'homeurl' => (new \moodle_url('/'))->out(false),
            'detailheroheading' => $service['detailheroheading'],
            'detailherocopy' => $service['detailherocopy'],
            'heroitems' => self::build_text_items($service['detailheroitems']),
            'overvieweyebrow' => $service['overvieweyebrow'],
            'overviewheading' => $service['overviewheading'],
            'overviewcopy' => $service['overviewcopy'],
            'overviewpoints' => self::build_text_items($service['overviewpoints']),
            'metricslabel' => $service['metricslabel'],
            'metricsheading' => $service['metricsheading'],
            'metricscopy' => $service['metricscopy'],
            'metrics' => self::build_metrics($service),
            'supportlabel' => $service['supportlabel'],
            'supportheading' => $service['supportheading'],
            'supportcopy' => $service['supportcopy'],
            'supportcards' => self::build_support_cards($service),
            'faqeyebrow' => $service['faqeyebrow'],
            'faqheading' => $service['faqheading'],
            'faqs' => self::build_faqs($service),
            'preforminquirycontent' => self::format_rich_text($service['preforminquirycontent'] ?? ''),
            'haspreforminquirycontent' => trim((string)($service['preforminquirycontent'] ?? '')) !== '',
            'ctalabel' => $service['detailctalabel'],
            'ctaheading' => $service['detailctaheading'],
            'ctacopy' => $service['detailctacopy'],
            'primaryctatext' => $service['ctatext'],
            'primaryctaurl' => $service['ctaurl'],
            'inquirytitle' => self::text('serviceinquirytitle'),
            'inquirycopy' => self::text('serviceinquirycopy'),
            'homebuttonlabel' => self::text('servicehomebutton'),
        ];
    }

    /**
     * Send a service inquiry to the admin user.
     *
     * @param array $service
     * @param array $data
     * @return bool
     */
    public static function send_service_inquiry(array $service, array $data): bool {
        $admin = get_admin();
        if (empty($admin) || empty($admin->email)) {
            return false;
        }

        $selectedserviceid = trim((string)($data['serviceid'] ?? ''));
        $selectedservice = self::get_service($selectedserviceid) ?? $service;
        $fullname = trim((string)($data['fullname'] ?? ''));
        $email = trim((string)($data['emailaddress'] ?? ''));
        $phone = trim((string)($data['phonenumber'] ?? ''));
        $message = trim((string)($data['message'] ?? ''));
        $submittedat = userdate(time());
        $serviceurl = self::get_service_url($selectedservice);

        $subject = str_replace('{$a}', $selectedservice['badge'], self::text('serviceinquiryemailsubject'));
        $text = implode(PHP_EOL, [
            'A new service inquiry has been submitted.',
            '',
            'Service: ' . $selectedservice['badge'],
            'Service URL: ' . $serviceurl,
            'Submitted at: ' . $submittedat,
            '',
            'Name: ' . $fullname,
            'Email: ' . $email,
            'Phone: ' . $phone,
            '',
            'Requirement:',
            $message,
        ]);

        $html = \html_writer::tag('p', 'A new service inquiry has been submitted.')
            . \html_writer::alist([
                'Service: ' . s($selectedservice['badge']),
                'Service URL: ' . s($serviceurl),
                'Submitted at: ' . s($submittedat),
                'Name: ' . s($fullname),
                'Email: ' . s($email),
                'Phone: ' . s($phone),
            ])
            . \html_writer::tag('p', 'Requirement:')
            . \html_writer::tag('p', nl2br(s($message)));

        return email_to_user($admin, \core_user::get_noreply_user(), $subject, $text, $html);
    }

    /**
     * Build detail sections from doc-based defaults.
     *
     * @param array $service
     * @return array
     */
    protected static function get_service_detail_blueprint(array $service): array {
        $generic = [
            'heroheading' => '',
            'herocopy' => '',
            'heroitems' => [],
            'overvieweyebrow' => 'Know About This Service',
            'overviewheading' => '',
            'overviewcopy' => '',
            'overviewpoints' => [],
            'metricslabel' => 'High Performance',
            'metricsheading' => 'Why this service stands out',
            'metricscopy' => 'Built to give clear direction, structured delivery, and practical impact.',
            'metrics' => [
                ['value' => '95%', 'label' => 'Clarity'],
                ['value' => '100%', 'label' => 'Guidance'],
                ['value' => '98%', 'label' => 'Practicality'],
                ['value' => '100%', 'label' => 'Support'],
            ],
            'supportcards' => [
                ['title' => 'Fast Performance', 'description' => 'Responsive support and quick guidance for the next action.'],
                ['title' => 'Perfect Responsive', 'description' => 'Designed to work smoothly for different learner and business needs.'],
                ['title' => 'Fast & Friendly Support', 'description' => 'Clear human guidance throughout the engagement.'],
                ['title' => 'Easy to Use', 'description' => 'Simple steps, practical recommendations, and focused execution.'],
            ],
            'faqeyebrow' => 'Question & Answer',
            'faqheading' => '',
            'faqs' => [
            ],
            'ctalabel' => 'Get Started',
            'ctaheading' => 'Talk to our team',
            'ctacopy' => 'We can help you choose the right package, next step, or support path.',
        ];

        switch ($service['id']) {
            case 'service-career-counselling':
                $generic['heroheading'] = 'One-to-One Career Counselling That Gives Real Direction';
                $generic['overviewheading'] = 'Personal guidance for Class 10, Class 12, and graduation stages';
                $generic['overviewcopy'] = 'Our counselling service helps learners choose streams, courses, colleges, exams, and career paths with confidence rather than confusion.';
                $generic['metricsheading'] = 'What makes this counselling service valuable';
                $generic['metricscopy'] = 'The process is built around personal goals, aptitude, and practical next steps instead of generic advice.';
                $generic['metrics'] = [
                    ['value' => '10th+', 'label' => 'Stream guidance'],
                    ['value' => '12th+', 'label' => 'Course planning'],
                    ['value' => 'Grad', 'label' => 'Career transition'],
                    ['value' => '1:1', 'label' => 'Personal mentoring'],
                ];
                $generic['faqs'] = [
                    ['question' => 'Who can benefit from one-to-one counselling?', 'answer' => 'Students after Class 10, students after Class 12, graduates, and learners planning higher studies, jobs, or entrepreneurship can all benefit from personalised guidance.'],
                    ['question' => 'What happens during a counselling session?', 'answer' => 'The session reviews interests, aptitude, confusion areas, available options, and practical next steps so the learner leaves with more clarity and a structured plan.'],
                    ['question' => 'Do you offer different packages?', 'answer' => 'Yes. The service can support quick clarity sessions, standard counselling, and deeper long-term planning based on the learner’s need.'],
                ];
                break;
            case 'service-professional-services':
                $generic['heroheading'] = 'Professional Services for Compliance, Growth, and Expansion';
                $generic['overviewheading'] = 'Integrated support for governance, finance, tax, legal, and expansion';
                $generic['overviewcopy'] = 'This service is designed for startups, MSMEs, corporates, and international businesses that need execution-backed advisory rather than fragmented vendor support.';
                $generic['metricsheading'] = 'Coverage across the business lifecycle';
                $generic['metricscopy'] = 'We support entity formation, compliance, finance, taxation, labour law, FEMA, legal, and strategic advisory from setup through scale.';
                $generic['metrics'] = [
                    ['value' => '11+', 'label' => 'Service domains'],
                    ['value' => '360°', 'label' => 'Business support'],
                    ['value' => 'India+', 'label' => 'Cross-border support'],
                    ['value' => '24x7', 'label' => 'Execution mindset'],
                ];
                $generic['faqs'] = [
                    ['question' => 'What kinds of organisations is this for?', 'answer' => 'It is suitable for startups, MSMEs, growing companies, established corporates, and foreign entities entering or operating in India.'],
                    ['question' => 'Which areas are covered?', 'answer' => 'Corporate governance, secretarial work, fundraising, accounting, payroll, taxation, FEMA, labour law, legal support, IPR, litigation coordination, and commercial advisory are all included in the broader offering.'],
                    ['question' => 'Can this support cross-border and investment matters?', 'answer' => 'Yes. The service includes FDI structuring, RBI and FEMA filings, overseas investment support, remittances, and related regulatory needs.'],
                ];
                break;
            case 'service-social-impact':
                $generic['heroheading'] = 'Education and Social Impact Through Structured Digital Learning';
                $generic['overviewheading'] = 'An initiative aligned with accessible, future-ready learning';
                $generic['overviewcopy'] = 'Developed under UG Alliance Foundation, this service direction focuses on educational value, employability, skilling, inclusion, and long-term social impact through digital programmes.';
                $generic['metricsheading'] = 'How this initiative creates value';
                $generic['metricscopy'] = 'The focus is not only on course delivery, but on capability building, access, ethical partnerships, and long-term outcomes for learners and institutions.';
                $generic['metrics'] = [
                    ['value' => 'NGO', 'label' => 'Guided initiative'],
                    ['value' => 'Digital', 'label' => 'Learning access'],
                    ['value' => 'Youth', 'label' => 'Empowerment focus'],
                    ['value' => 'Ethical', 'label' => 'Transparent approach'],
                ];
                $generic['faqs'] = [
                    ['question' => 'What is the purpose of this initiative?', 'answer' => 'The purpose is to bridge education and employability, support digital learning, and create meaningful educational and social value through structured programmes.'],
                    ['question' => 'Who does it serve?', 'answer' => 'Students, professionals, educators, mentors, trainers, institutions, and collaborators who want inclusive and future-ready learning opportunities.'],
                    ['question' => 'How is it different from a normal course listing?', 'answer' => 'It is positioned as a broader education and skilling initiative focused on long-term impact, access, ethics, and responsible educational growth.'],
                ];
                break;
        }

        return $generic;
    }

    /**
     * Build default detail content for a service.
     *
     * @param array $service
     * @return array
     */
    protected static function get_default_detail_content(array $service): array {
        $generic = [
            'detailheroheading' => '',
            'detailherocopy' => '',
            'detailheroitems' => [],
            'overvieweyebrow' => 'Know About This Service',
            'overviewheading' => '',
            'overviewcopy' => '',
            'overviewpoints' => [],
            'metricslabel' => 'High Performance',
            'metricsheading' => 'Why this service stands out',
            'metricscopy' => 'Built to give clear direction, structured delivery, and practical impact.',
            'metriconevalue' => '95%',
            'metriconelabel' => 'Clarity',
            'metrictwovalue' => '100%',
            'metrictwolabel' => 'Guidance',
            'metricthreevalue' => '98%',
            'metricthreelabel' => 'Practicality',
            'metricfourvalue' => '100%',
            'metricfourlabel' => 'Support',
            'supportlabel' => 'What You Get',
            'supportheading' => 'Support designed for practical outcomes',
            'supportcopy' => 'Each engagement is structured to keep the learner or organisation clear, supported, and action-oriented.',
            'supportcardonetitle' => 'Fast Performance',
            'supportcardonedescription' => 'Responsive support and quick guidance for the next action.',
            'supportcardtwotitle' => 'Perfect Responsive',
            'supportcardtwodescription' => 'Designed to work smoothly for different learner and business needs.',
            'supportcardthreetitle' => 'Fast & Friendly Support',
            'supportcardthreedescription' => 'Clear human guidance throughout the engagement.',
            'supportcardfourtitle' => 'Easy to Use',
            'supportcardfourdescription' => 'Simple steps, practical recommendations, and focused execution.',
            'faqeyebrow' => 'Question & Answer',
            'faqheading' => '',
            'faqonequestion' => '',
            'faqoneanswer' => '',
            'faqtwoquestion' => '',
            'faqtwoanswer' => '',
            'faqthreequestion' => '',
            'faqthreeanswer' => '',
            'faqfourquestion' => '',
            'faqfouranswer' => '',
            'preforminquirycontent' => '',
            'detailctalabel' => 'Get Started',
            'detailctaheading' => 'Talk to our team',
            'detailctacopy' => 'We can help you choose the right package, next step, or support path.',
        ];

        switch ($service['id']) {
            case 'service-career-counselling':
                $generic['detailheroheading'] = 'One-to-One Career Counselling That Gives Real Direction';
                $generic['overviewheading'] = 'Personal guidance for Class 10, Class 12, and graduation stages';
                $generic['overviewcopy'] = 'Our counselling service helps learners choose streams, courses, colleges, exams, and career paths with confidence rather than confusion.';
                $generic['metricsheading'] = 'What makes this counselling service valuable';
                $generic['metricscopy'] = 'The process is built around personal goals, aptitude, and practical next steps instead of generic advice.';
                $generic['metriconevalue'] = '10th+';
                $generic['metriconelabel'] = 'Stream guidance';
                $generic['metrictwovalue'] = '12th+';
                $generic['metrictwolabel'] = 'Course planning';
                $generic['metricthreevalue'] = 'Grad';
                $generic['metricthreelabel'] = 'Career transition';
                $generic['metricfourvalue'] = '1:1';
                $generic['metricfourlabel'] = 'Personal mentoring';
                $generic['faqonequestion'] = 'Who can benefit from one-to-one counselling?';
                $generic['faqoneanswer'] = 'Students after Class 10, students after Class 12, graduates, and learners planning higher studies, jobs, or entrepreneurship can all benefit from personalised guidance.';
                $generic['faqtwoquestion'] = 'What happens during a counselling session?';
                $generic['faqtwoanswer'] = 'The session reviews interests, aptitude, confusion areas, available options, and practical next steps so the learner leaves with more clarity and a structured plan.';
                $generic['faqthreequestion'] = 'Do you offer different packages?';
                $generic['faqthreeanswer'] = 'Yes. The service can support quick clarity sessions, standard counselling, and deeper long-term planning based on the learner\'s need.';
                break;
            case 'service-professional-services':
                $generic['detailheroheading'] = 'Professional Services for Compliance, Growth, and Expansion';
                $generic['overviewheading'] = 'Integrated support for governance, finance, tax, legal, and expansion';
                $generic['overviewcopy'] = 'This service is designed for startups, MSMEs, corporates, and international businesses that need execution-backed advisory rather than fragmented vendor support.';
                $generic['metricsheading'] = 'Coverage across the business lifecycle';
                $generic['metricscopy'] = 'We support entity formation, compliance, finance, taxation, labour law, FEMA, legal, and strategic advisory from setup through scale.';
                $generic['metriconevalue'] = '11+';
                $generic['metriconelabel'] = 'Service domains';
                $generic['metrictwovalue'] = '360°';
                $generic['metrictwolabel'] = 'Business support';
                $generic['metricthreevalue'] = 'India+';
                $generic['metricthreelabel'] = 'Cross-border support';
                $generic['metricfourvalue'] = '24x7';
                $generic['metricfourlabel'] = 'Execution mindset';
                $generic['faqonequestion'] = 'What kinds of organisations is this for?';
                $generic['faqoneanswer'] = 'It is suitable for startups, MSMEs, growing companies, established corporates, and foreign entities entering or operating in India.';
                $generic['faqtwoquestion'] = 'Which areas are covered?';
                $generic['faqtwoanswer'] = 'Corporate governance, secretarial work, fundraising, accounting, payroll, taxation, FEMA, labour law, legal support, IPR, litigation coordination, and commercial advisory are all included in the broader offering.';
                $generic['faqthreequestion'] = 'Can this support cross-border and investment matters?';
                $generic['faqthreeanswer'] = 'Yes. The service includes FDI structuring, RBI and FEMA filings, overseas investment support, remittances, and related regulatory needs.';
                break;
            case 'service-social-impact':
                $generic['detailheroheading'] = 'Education and Social Impact Through Structured Digital Learning';
                $generic['overviewheading'] = 'An initiative aligned with accessible, future-ready learning';
                $generic['overviewcopy'] = 'Developed under UG Alliance Foundation, this service direction focuses on educational value, employability, skilling, inclusion, and long-term social impact through digital programmes.';
                $generic['metricsheading'] = 'How this initiative creates value';
                $generic['metricscopy'] = 'The focus is not only on course delivery, but on capability building, access, ethical partnerships, and long-term outcomes for learners and institutions.';
                $generic['metriconevalue'] = 'NGO';
                $generic['metriconelabel'] = 'Guided initiative';
                $generic['metrictwovalue'] = 'Digital';
                $generic['metrictwolabel'] = 'Learning access';
                $generic['metricthreevalue'] = 'Youth';
                $generic['metricthreelabel'] = 'Empowerment focus';
                $generic['metricfourvalue'] = 'Ethical';
                $generic['metricfourlabel'] = 'Transparent approach';
                $generic['faqonequestion'] = 'What is the purpose of this initiative?';
                $generic['faqoneanswer'] = 'The purpose is to bridge education and employability, support digital learning, and create meaningful educational and social value through structured programmes.';
                $generic['faqtwoquestion'] = 'Who does it serve?';
                $generic['faqtwoanswer'] = 'Students, professionals, educators, mentors, trainers, institutions, and collaborators who want inclusive and future-ready learning opportunities.';
                $generic['faqthreequestion'] = 'How is it different from a normal course listing?';
                $generic['faqthreeanswer'] = 'It is positioned as a broader education and skilling initiative focused on long-term impact, access, ethics, and responsible educational growth.';
                break;
        }

        return $generic;
    }

    /**
     * Normalise a string list input.
     *
     * @param mixed $items
     * @return array
     */
    protected static function normalise_multiline_list($items): array {
        if (!is_array($items)) {
            $items = preg_split('/\r\n|\r|\n/', (string)$items);
        }

        return array_values(array_filter(array_map('trim', $items), static function(string $item): bool {
            return $item !== '';
        }));
    }

    /**
     * Convert plain strings into template items.
     *
     * @param array $items
     * @return array
     */
    protected static function build_text_items(array $items): array {
        return array_map(static function(string $item): array {
            return ['text' => $item];
        }, $items);
    }

    /**
     * Build metrics for template rendering.
     *
     * @param array $service
     * @return array
     */
    protected static function build_metrics(array $service): array {
        $metrics = [];
        $map = [
            ['value' => 'metriconevalue', 'label' => 'metriconelabel'],
            ['value' => 'metrictwovalue', 'label' => 'metrictwolabel'],
            ['value' => 'metricthreevalue', 'label' => 'metricthreelabel'],
            ['value' => 'metricfourvalue', 'label' => 'metricfourlabel'],
        ];

        foreach ($map as $item) {
            $value = trim((string)($service[$item['value']] ?? ''));
            $label = trim((string)($service[$item['label']] ?? ''));
            if ($value === '' && $label === '') {
                continue;
            }
            $metrics[] = ['value' => $value, 'label' => $label];
        }

        return $metrics;
    }

    /**
     * Build support cards for template rendering.
     *
     * @param array $service
     * @return array
     */
    protected static function build_support_cards(array $service): array {
        $cards = [];
        $map = [
            ['title' => 'supportcardonetitle', 'description' => 'supportcardonedescription'],
            ['title' => 'supportcardtwotitle', 'description' => 'supportcardtwodescription'],
            ['title' => 'supportcardthreetitle', 'description' => 'supportcardthreedescription'],
            ['title' => 'supportcardfourtitle', 'description' => 'supportcardfourdescription'],
        ];

        foreach ($map as $item) {
            $title = trim((string)($service[$item['title']] ?? ''));
            $description = trim((string)($service[$item['description']] ?? ''));
            if ($title === '' && $description === '') {
                continue;
            }
            $cards[] = ['title' => $title, 'description' => $description];
        }

        return $cards;
    }

    /**
     * Build FAQs for template rendering.
     *
     * @param array $service
     * @return array
     */
    protected static function build_faqs(array $service): array {
        $faqs = [];
        $map = [
            ['question' => 'faqonequestion', 'answer' => 'faqoneanswer'],
            ['question' => 'faqtwoquestion', 'answer' => 'faqtwoanswer'],
            ['question' => 'faqthreequestion', 'answer' => 'faqthreeanswer'],
            ['question' => 'faqfourquestion', 'answer' => 'faqfouranswer'],
        ];

        foreach ($map as $item) {
            $question = trim((string)($service[$item['question']] ?? ''));
            $answer = trim((string)($service[$item['answer']] ?? ''));
            if ($question === '' && $answer === '') {
                continue;
            }
            $faqs[] = [
                'question' => $question,
                'answer' => self::format_rich_text($answer),
            ];
        }

        return $faqs;
    }

    /**
     * Format rich text content for safe frontend rendering.
     *
     * @param string $value
     * @return string
     */
    protected static function format_rich_text(string $value): string {
        $value = trim($value);
        if ($value === '') {
            return '';
        }

        return format_text($value, FORMAT_HTML, [
            'context' => \context_system::instance(),
            'para' => false,
        ]);
    }

    /**
     * Build the stored file itemid for a service.
     *
     * @param string $serviceid
     * @return int
     */
    public static function get_service_itemid(string $serviceid): int {
        return (int)sprintf('%u', crc32($serviceid));
    }

    /**
     * Prepare a draft item id for a service detail image element.
     *
     * @param array $service
     * @param string $elementname
     * @param string $filearea
     * @return int
     */
    public static function prepare_detail_image_draft_itemid(array $service, string $elementname, string $filearea): int {
        $draftitemid = file_get_submitted_draft_itemid($elementname);
        $context = \context_system::instance();
        $itemid = !empty($service['id']) ? self::get_service_itemid($service['id']) : 0;

        file_prepare_draft_area($draftitemid, $context->id, 'theme_boost', $filearea, $itemid,
            ['subdirs' => 0, 'maxfiles' => 1]);

        return $draftitemid;
    }

    /**
     * Save uploaded image from draft area into permanent storage for a detail section.
     *
     * @param string $serviceid
     * @param int $draftitemid
     * @param string $filearea
     * @return void
     */
    public static function save_detail_image(string $serviceid, int $draftitemid, string $filearea): void {
        if ($draftitemid <= 0 || $serviceid === '') {
            return;
        }

        $context = \context_system::instance();
        file_save_draft_area_files($draftitemid, $context->id, 'theme_boost', $filearea,
            self::get_service_itemid($serviceid), ['subdirs' => 0, 'maxfiles' => 1, 'accepted_types' => ['image']]);
    }

    /**
     * Return the stored service detail image URL if present.
     *
     * @param array $service
     * @param string $slot
     * @return string
     */
    public static function get_service_detail_image_url(array $service, string $slot): string {
        $filearea = self::DETAIL_IMAGE_AREAS[$slot] ?? '';
        if ($filearea === '') {
            return '';
        }

        return self::get_detail_image_url($service, $filearea);
    }

    /**
     * Return the stored image URL for a file area if present.
     *
     * @param array $service
     * @param string $filearea
     * @return string
     */
    protected static function get_detail_image_url(array $service, string $filearea): string {
        if (empty($service['id'])) {
            return '';
        }

        $context = \context_system::instance();
        $fs = get_file_storage();
        $files = $fs->get_area_files($context->id, 'theme_boost', $filearea, self::get_service_itemid($service['id']),
            'filename', false);

        if (empty($files)) {
            return '';
        }

        $file = reset($files);
        return \moodle_url::make_pluginfile_url(
            $context->id,
            'theme_boost',
            $filearea,
            self::get_service_itemid($service['id']),
            '/',
            $file->get_filename()
        )->out(false);
    }

    /**
     * Build short initials for service badge art.
     *
     * @param string $title
     * @return string
     */
    protected static function build_initials(string $title): string {
        $parts = preg_split('/\s+/', trim($title));
        $initials = '';

        foreach ($parts as $part) {
            if ($part === '') {
                continue;
            }
            $initials .= \core_text::substr($part, 0, 1);
            if (\core_text::strlen($initials) >= 2) {
                break;
            }
        }

        return strtoupper($initials ?: 'SV');
    }

    /**
     * Return one of the card accent classes.
     *
     * @param int $index
     * @return string
     */
    protected static function get_accent_class(int $index): string {
        $classes = ['is-blue', 'is-indigo', 'is-cyan', 'is-coral', 'is-violet', 'is-gold'];
        return $classes[$index % count($classes)];
    }
}
