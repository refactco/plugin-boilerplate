<?php
/**
 * Plugin Name:       Plugin Name
 * Plugin URI:        https://refact.co/
 * Description:       plugin Name Description
 * Version:           1.0.0
 * Author:            Refact
 * Author URI:        https://refact.co
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 * Requires at least: 4.5
 * Requires PHP:      7.4+
 * Tested up to:      5.7
 * Stable tag:        1.0.0
 * Tags:              plugin, boilerplate

 * Plugin Name Description
 * php version 5.6+
 *
 * @category Plugin
 * @package  Plugin_Name
 * @author   Refact <dev@refact.co>
 * @license  GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
 * @link     https://refact.co/
 **/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load Plugin File autoload.
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 *
 * @return void
 */
function plugin_name_activate() {
	include_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 *
 * @return void
 */
function plugin_name_deactivate() {
	include_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'plugin_name_activate' );
register_deactivation_hook( __FILE__, 'plugin_name_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since  1.0.0
 * @return void
 */
function plugin_name_run() {
	$plugin = new Plugin_Name_Core();
	$plugin->run();
}

plugin_name_run();
