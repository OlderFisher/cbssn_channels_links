<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/OlderFisher
 * @since      1.0.0
 *
 * @package    Cbssn_channels_links
 * @subpackage Cbssn_channels_links/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cbssn_channels_links
 * @subpackage Cbssn_channels_links/includes
 * @author     Aleksandr Lilik <lilik.aleksandr@gmail.com>
 */
class Cbssn_channels_links_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cbssn_channels_links',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
