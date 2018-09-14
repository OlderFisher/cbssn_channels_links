<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/OlderFisher
 * @since             1.0.0
 * @package           Cbssn_channels_links
 *
 * @wordpress-plugin
 * Plugin Name:       CBSSN Channels Links
 * Plugin URI:        https://github.com/OlderFisher/cbssn_channels_links
 * Description:       CBSSN internet channels admin panel
 * Version:           1.0.0
 * Author:            Aleksandr Lilik
 * Author URI:        https://github.com/OlderFisher
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cbssn_channels_links
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
define( 'CBSSN_CHANNELS_LINKS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cbssn_channels_links-activator.php
 */
function activate_cbssn_channels_links() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cbssn_channels_links-activator.php';
	Cbssn_channels_links_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cbssn_channels_links-deactivator.php
 */
function deactivate_cbssn_channels_links() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cbssn_channels_links-deactivator.php';
	Cbssn_channels_links_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cbssn_channels_links' );
register_deactivation_hook( __FILE__, 'deactivate_cbssn_channels_links' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cbssn_channels_links.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cbssn_channels_links() {

	$plugin = new Cbssn_channels_links();
	$plugin->run();

}
run_cbssn_channels_links();
