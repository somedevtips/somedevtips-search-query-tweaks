<?php
/**
 * Plugin Name: Somedevtips Search Query Tweaks
 * Plugin URI: https://github.com/somedevtips/somedevtips-search-query-tweaks
 * Description: Tweaks to the WordPress search query
 * Author: SomeDevTips
 * Version: 1.0.1
 * Author URI: https://somedevtips.com/
 * Text Domain: somedevtips-search-query-tweaks
 * License: AGPLv3.0
 */

namespace SomeDevTipsSearchQueryTweaks;

defined( 'ABSPATH' ) OR exit;

$someDevTipsSearchQueryTweaksAutoloader = __DIR__ . '/vendor/autoload.php';
if (!file_exists($someDevTipsSearchQueryTweaksAutoloader)) {
    return false;
}
require $someDevTipsSearchQueryTweaksAutoloader;

$someDevTipsSearchQueryTweaksBootstrapper = new Bootstrapper();
add_action('plugins_loaded', [$someDevTipsSearchQueryTweaksBootstrapper, 'bootstrap'], 0);