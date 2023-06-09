<?php

/**
 * The Public Class
 *
 * The public-facing functionality of the plugin.
 *
 * php version 7.4+
 *
 * @category   Plugin
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 * @author     Refact <dev@refact.co>
 * @license    GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
 * @link       https://refact.co/
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @category   Plugin
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Refact <info@refact.co>
 * @license    GPL-2.0+ http://www.gnu.org/licenses/gpl-2.0.txt
 * @link       https://refact.co/
 * @since      1.0.0
 */
class Plugin_Name_Public
{

	/**
	 * The ID of this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $_plugin_name    The ID of this plugin.
	 */
	private $_plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $_version    The current version of this plugin.
	 */
	private $_version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 * @param string    $_plugin_name       The name of the plugin.
	 * @param string    $_version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->_plugin_name = $plugin_name;
		$this->_version     = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 * @return    void
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->_plugin_name, plugin_dir_url(__FILE__) . 'css/plugin-name-public.css', array(), $this->_version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 * 
	 * @return void
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->_plugin_name, plugin_dir_url(__FILE__) . 'js/plugin-name-public.js', array('jquery'), $this->_version, false);
	}
}
