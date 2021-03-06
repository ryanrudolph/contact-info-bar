<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.ryanrudolph.com
 * @since             0.0.1
 * @package           Contact_Info_Bar
 *
 * @wordpress-plugin
 * Plugin Name:       Contact Info Bar
 * Plugin URI:        https://getphound.com
 * Description:       Add contact information to the top of your website.
 * Version:           0.0.1
 * Author:            Ryan Rudolph
 * Author URI:        https://www.ryanrudolph.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       contact-info-bar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-contact-info-bar-activator.php
 */
function activate_contact_info_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-contact-info-bar-activator.php';
	Contact_Info_Bar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-contact-info-bar-deactivator.php
 */
function deactivate_contact_info_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-contact-info-bar-deactivator.php';
	Contact_Info_Bar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_contact_info_bar' );
register_deactivation_hook( __FILE__, 'deactivate_contact_info_bar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-contact-info-bar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_contact_info_bar() {

	$plugin = new Contact_Info_Bar();
	$plugin->run();

}
run_contact_info_bar();
