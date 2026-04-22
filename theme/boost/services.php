<?php
require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/classes/local/service_manager.php');

use theme_boost\local\service_manager;

redirect(new moodle_url(service_manager::get_default_service_url()));
