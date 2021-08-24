<?php
/**
 * Phú Plugin
 *
 * @package           PhuPlugin
 * @author            Quang Ngọc Phú
 * @copyright         2021 Quang Ngọc Phú
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Phu Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Quang Ngọc Phú
 * Author URI:        https://phuquang.mimup.net/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       phu-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

define('PHU_PLUGIN_NAME', 'phu-plugin');

define('PHU_PLUGIN_DIR_URL', plugin_dir_url(__FILE__));

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define('PHU_PLUGIN_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/PhuPluginActivator.php
 */
function activate_phu_plugin()
{
    require_once plugin_dir_path(__FILE__) . 'includes/PhuPluginActivator.php';
    PhuPluginActivator::activate();
}

register_activation_hook(__FILE__, 'activate_phu_plugin');

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/PhuPluginDeactivator.php
 */
function deactivate_phu_plugin()
{
    require_once plugin_dir_path(__FILE__) . 'includes/PhuPluginDeactivator.php';
    PhuPluginDeactivator::deactivate();
}

register_deactivation_hook(__FILE__, 'deactivate_phu_plugin');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path(__FILE__) . 'includes/PhuPlugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_phu_plugin()
{

    $plugin = new PhuPlugin();
    $plugin->run();

}
run_phu_plugin();
