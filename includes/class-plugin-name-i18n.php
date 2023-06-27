<?php
/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @category   Plugin
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Refact <info@refact.co>
 * @license    GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
 * @link       https://refact.co/
 * @since      1.0.0
 */
class Plugin_Name_i18n
{

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 * @return void
	 */
	public function load_plugin_textdomain()
	{

		load_plugin_textdomain(
			'plugin-name',
			false,
			dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
		);
	}
}
