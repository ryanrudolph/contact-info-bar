<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.ryanrudolph.com
 * @since      1.0.0
 *
 * @package    Contact_Info_Bar
 * @subpackage Contact_Info_Bar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Contact_Info_Bar
 * @subpackage Contact_Info_Bar/includes
 * @author     Ryan Rudolph <ryan@getphound.com>
 */
class Contact_Info_Bar_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'contact-info-bar',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
