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
 * Team page manager.
 *
 * @package   theme_boost
 */
class team_manager {
    /** @var string */
    public const MEMBERS_CONFIG_KEY = 'teammembersdata';
    /** @var string */
    public const PAGE_CONFIG_KEY = 'teampagecontent';
    /** @var string */
    public const FILEAREA = 'teammemberimage';

    /**
     * Fallback labels for the team feature.
     *
     * @param string $key
     * @param mixed $a
     * @return string
     */
    public static function text(string $key, $a = null): string {
        $strings = [
            'addteammember' => 'Add team member',
            'deleteteammemberconfirm' => 'Delete team member "{$a}"?',
            'manageteam' => 'Manage team',
            'manageteamdesc' => 'Add, edit, hide, reorder, or delete the team members shown on the public Team page.',
            'noteammembersconfigured' => 'No team members are configured yet.',
            'savepagecontent' => 'Save page content',
            'saveteammember' => 'Save team member',
            'teammemberdeleted' => 'Team member deleted successfully.',
            'teammemberimagehelp' => 'Upload one profile image for this team member.',
            'teammemberimagepreview' => 'Current member image',
            'teammembersaved' => 'Team member saved successfully.',
            'teampagecontent' => 'Team page content',
            'teampagecontentsaved' => 'Team page content saved successfully.',
            'teampagetitle' => 'Team',
            'teampageintro' => 'Manage the Team page heading and introductory text shown above the member cards.',
            'team' => 'Team',
            'teamadminhint' => 'Need to update the people shown here? Use the Manage team screen in Theme settings.',
            'teamctaheading' => 'Want to connect with our team?',
            'teamctacopy' => 'Reach out to us and we will help you connect with the right person.',
            'teamemptyheading' => 'Team profiles will appear here soon.',
            'teamemptysubcopy' => 'Add team members from the backend and they will show up here automatically.',
            'teameyebrow' => 'Meet Our Team',
            'teamheading' => 'People behind the learning experience',
            'teamintro' => 'This page is fully managed from the backend. Add team members, upload their profile photos, and update their details whenever you need.',
            'teammemberbio' => 'Short description',
            'teammemberemail' => 'Email address',
            'teammemberimage' => 'Profile image',
            'teammembername' => 'Member name',
            'teammemberphone' => 'Phone number',
            'teammemberprofileurl' => 'Profile / social link',
            'teammemberrole' => 'Designation / role',
            'teammembersortorder' => 'Sort order',
            'teammembervisible' => 'Visible on Team page',
            'viewteampage' => 'View team page',
            'teampageeyebrowlabel' => 'Page eyebrow',
            'teampageheadinglabel' => 'Page heading',
            'teampageintrolabel' => 'Page introduction',
            'teampagectaheadinglabel' => 'CTA heading',
            'teampagectacopylabel' => 'CTA description',
        ];

        $text = $strings[$key] ?? $key;
        if ($a !== null) {
            $text = str_replace('{$a}', (string)$a, $text);
        }

        return $text;
    }

    /**
     * Return configured team members.
     *
     * @param bool $includehidden
     * @return array
     */
    public static function get_members(bool $includehidden = true): array {
        $stored = get_config('theme_boost', self::MEMBERS_CONFIG_KEY);
        $members = [];

        if (!empty($stored)) {
            $decoded = json_decode($stored, true);
            if (is_array($decoded)) {
                foreach ($decoded as $member) {
                    $members[] = self::normalise_member((array)$member);
                }
            }
        }

        if (empty($members)) {
            $members = self::get_default_members();
            self::save_members($members);
        }

        usort($members, static function(array $left, array $right): int {
            return ($left['sortorder'] <=> $right['sortorder']) ?: strcmp($left['name'], $right['name']);
        });

        if (!$includehidden) {
            $members = array_values(array_filter($members, static function(array $member): bool {
                return !empty($member['visible']);
            }));
        }

        return $members;
    }

    /**
     * Get one member by id.
     *
     * @param string $id
     * @return array|null
     */
    public static function get_member(string $id): ?array {
        foreach (self::get_members(true) as $member) {
            if ($member['id'] === $id) {
                return $member;
            }
        }

        return null;
    }

    /**
     * Save one member.
     *
     * @param array $data
     * @return string
     */
    public static function save_member(array $data): string {
        $members = self::get_members(true);
        $existingmatch = [];
        foreach ($members as $existing) {
            if (!empty($data['id']) && $existing['id'] === $data['id']) {
                $existingmatch = $existing;
                break;
            }
        }

        $member = self::normalise_member(array_merge($existingmatch, $data));
        if ($member['id'] === '') {
            $member['id'] = self::generate_id();
        }

        $updated = false;
        foreach ($members as $index => $existing) {
            if ($existing['id'] === $member['id']) {
                $members[$index] = $member;
                $updated = true;
                break;
            }
        }

        if (!$updated) {
            $members[] = $member;
        }

        self::save_members($members);
        return $member['id'];
    }

    /**
     * Delete one member and its uploaded image.
     *
     * @param string $id
     * @return void
     */
    public static function delete_member(string $id): void {
        if ($id !== '') {
            $fs = get_file_storage();
            $fs->delete_area_files(\context_system::instance()->id, 'theme_boost', self::FILEAREA, self::get_member_itemid($id));
        }

        $members = array_values(array_filter(self::get_members(true), static function(array $member) use ($id): bool {
            return $member['id'] !== $id;
        }));
        self::save_members($members);
    }

    /**
     * Get editable Team page content.
     *
     * @return array
     */
    public static function get_page_content(): array {
        $defaults = [
            'eyebrow' => self::text('teameyebrow'),
            'heading' => self::text('teamheading'),
            'intro' => self::text('teamintro'),
            'ctaheading' => self::text('teamctaheading'),
            'ctacopy' => self::text('teamctacopy'),
        ];

        $stored = get_config('theme_boost', self::PAGE_CONFIG_KEY);
        if (empty($stored)) {
            return $defaults;
        }

        $decoded = json_decode($stored, true);
        if (!is_array($decoded)) {
            return $defaults;
        }

        return array_merge($defaults, array_intersect_key($decoded, $defaults));
    }

    /**
     * Save Team page content.
     *
     * @param array $data
     * @return void
     */
    public static function save_page_content(array $data): void {
        $current = self::get_page_content();
        $payload = [
            'eyebrow' => trim((string)($data['eyebrow'] ?? $current['eyebrow'])),
            'heading' => trim((string)($data['heading'] ?? $current['heading'])),
            'intro' => trim((string)($data['intro'] ?? $current['intro'])),
            'ctaheading' => trim((string)($data['ctaheading'] ?? $current['ctaheading'])),
            'ctacopy' => trim((string)($data['ctacopy'] ?? $current['ctacopy'])),
        ];

        set_config(self::PAGE_CONFIG_KEY, json_encode($payload), 'theme_boost');
    }

    /**
     * Export template data for Team page.
     *
     * @param int|null $limit
     * @return array
     */
    public static function export_for_template(?int $limit = null): array {
        $pagecontent = self::get_page_content();
        $members = [];
        $visiblemembers = self::get_members(false);

        if ($limit !== null && $limit > 0) {
            $visiblemembers = array_slice($visiblemembers, 0, $limit);
        }

        foreach ($visiblemembers as $index => $member) {
            $email = trim((string)$member['email']);
            $phone = trim((string)$member['phone']);
            $profileurl = trim((string)$member['profileurl']);
            $imageurl = self::get_member_image_url($member);

            $members[] = [
                'name' => $member['name'],
                'role' => $member['role'],
                'bio' => $member['bio'],
                'initials' => self::build_initials($member['name']),
                'accentclass' => self::get_accent_class($index),
                'imageurl' => $imageurl,
                'hasimage' => $imageurl !== '',
                'email' => $email,
                'hasemail' => $email !== '',
                'emaillink' => $email !== '' ? 'mailto:' . $email : '',
                'phone' => $phone,
                'hasphone' => $phone !== '',
                'phonelink' => $phone !== '' ? 'tel:' . preg_replace('/\s+/', '', $phone) : '',
                'profileurl' => $profileurl,
                'hasprofileurl' => $profileurl !== '',
            ];
        }

        return [
            'eyebrow' => $pagecontent['eyebrow'],
            'heading' => $pagecontent['heading'],
            'intro' => $pagecontent['intro'],
            'ctaheading' => $pagecontent['ctaheading'],
            'ctacopy' => $pagecontent['ctacopy'],
            'members' => $members,
            'hasmembers' => !empty($members),
            'membercount' => count($members),
            'emptyheading' => self::text('teamemptyheading'),
            'emptysubcopy' => self::text('teamemptysubcopy'),
            'teampageurl' => (new \moodle_url('/theme/boost/team.php'))->out(false),
            'contacturl' => (new \moodle_url('/theme/boost/contact.php'))->out(false),
            'manageurl' => (new \moodle_url('/theme/boost/manage_team.php'))->out(false),
            'showadminhint' => is_siteadmin(),
            'adminhint' => self::text('teamadminhint'),
            'managebuttonlabel' => self::text('manageteam'),
        ];
    }

    /**
     * Prepare draft item id for member image.
     *
     * @param array $member
     * @param string $elementname
     * @return int
     */
    public static function prepare_image_draft_itemid(array $member, string $elementname): int {
        $draftitemid = file_get_submitted_draft_itemid($elementname);
        $context = \context_system::instance();
        $itemid = !empty($member['id']) ? self::get_member_itemid($member['id']) : 0;

        file_prepare_draft_area($draftitemid, $context->id, 'theme_boost', self::FILEAREA, $itemid,
            ['subdirs' => 0, 'maxfiles' => 1]);

        return $draftitemid;
    }

    /**
     * Save member image from draft area.
     *
     * @param string $memberid
     * @param int $draftitemid
     * @return void
     */
    public static function save_image(string $memberid, int $draftitemid): void {
        if ($memberid === '' || $draftitemid <= 0) {
            return;
        }

        $context = \context_system::instance();
        file_save_draft_area_files($draftitemid, $context->id, 'theme_boost', self::FILEAREA,
            self::get_member_itemid($memberid), ['subdirs' => 0, 'maxfiles' => 1, 'accepted_types' => ['image']]);
    }

    /**
     * Return the member image URL if present.
     *
     * @param array $member
     * @return string
     */
    public static function get_member_image_url(array $member): string {
        if (empty($member['id'])) {
            return '';
        }

        $context = \context_system::instance();
        $fs = get_file_storage();
        $files = $fs->get_area_files($context->id, 'theme_boost', self::FILEAREA, self::get_member_itemid($member['id']),
            'filename', false);

        if (empty($files)) {
            return '';
        }

        $file = reset($files);
        return \moodle_url::make_pluginfile_url(
            $context->id,
            'theme_boost',
            self::FILEAREA,
            self::get_member_itemid($member['id']),
            '/',
            $file->get_filename()
        )->out(false);
    }

    /**
     * Build stored file itemid for a member.
     *
     * @param string $memberid
     * @return int
     */
    public static function get_member_itemid(string $memberid): int {
        return (int)sprintf('%u', crc32($memberid));
    }

    /**
     * Save members collection.
     *
     * @param array $members
     * @return void
     */
    protected static function save_members(array $members): void {
        set_config(self::MEMBERS_CONFIG_KEY, json_encode(array_values($members)), 'theme_boost');
    }

    /**
     * Default dummy team members for first-time setup.
     *
     * @return array
     */
    protected static function get_default_members(): array {
        return [
            self::normalise_member([
                'id' => 'teammember-founder',
                'name' => 'Aarav Sharma',
                'role' => 'Founder & Director',
                'bio' => 'Leads the platform vision, partnerships, and overall growth strategy for the learning business.',
                'email' => 'aarav@example.com',
                'phone' => '+91 98765 43210',
                'profileurl' => 'https://www.linkedin.com/',
                'sortorder' => 10,
                'visible' => 1,
            ]),
            self::normalise_member([
                'id' => 'teammember-academics',
                'name' => 'Priya Mehta',
                'role' => 'Academic Head',
                'bio' => 'Oversees course quality, learner outcomes, and faculty coordination across programs.',
                'email' => 'priya@example.com',
                'phone' => '+91 91234 56780',
                'profileurl' => 'https://www.linkedin.com/',
                'sortorder' => 20,
                'visible' => 1,
            ]),
            self::normalise_member([
                'id' => 'teammember-support',
                'name' => 'Rohan Verma',
                'role' => 'Student Success Manager',
                'bio' => 'Supports learners from onboarding to completion and helps them stay on track with clear guidance.',
                'email' => 'rohan@example.com',
                'phone' => '+91 99887 76655',
                'profileurl' => 'https://www.linkedin.com/',
                'sortorder' => 30,
                'visible' => 1,
            ]),
        ];
    }

    /**
     * Normalise one member payload.
     *
     * @param array $member
     * @return array
     */
    protected static function normalise_member(array $member): array {
        return [
            'id' => trim((string)($member['id'] ?? '')),
            'name' => trim((string)($member['name'] ?? '')),
            'role' => trim((string)($member['role'] ?? '')),
            'bio' => trim((string)($member['bio'] ?? '')),
            'email' => trim((string)($member['email'] ?? '')),
            'phone' => trim((string)($member['phone'] ?? '')),
            'profileurl' => trim((string)($member['profileurl'] ?? '')),
            'sortorder' => (int)($member['sortorder'] ?? 0),
            'visible' => !empty($member['visible']) ? 1 : 0,
        ];
    }

    /**
     * Generate a stable new member id.
     *
     * @return string
     */
    protected static function generate_id(): string {
        return 'teammember-' . substr(sha1(microtime(true) . '-' . random_int(1000, 999999)), 0, 12);
    }

    /**
     * Build initials for display when no image exists.
     *
     * @param string $name
     * @return string
     */
    protected static function build_initials(string $name): string {
        $parts = preg_split('/\s+/', trim($name));
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

        return strtoupper($initials ?: 'TM');
    }

    /**
     * Rotate card accent classes.
     *
     * @param int $index
     * @return string
     */
    protected static function get_accent_class(int $index): string {
        $classes = ['is-sky', 'is-amber', 'is-rose', 'is-emerald', 'is-indigo', 'is-slate'];
        return $classes[$index % count($classes)];
    }
}
