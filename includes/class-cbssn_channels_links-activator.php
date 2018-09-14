<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/OlderFisher
 * @since      1.0.0
 *
 * @package    Cbssn_channels_links
 * @subpackage Cbssn_channels_links/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Cbssn_channels_links
 * @subpackage Cbssn_channels_links/includes
 * @author     Aleksandr Lilik <lilik.aleksandr@gmail.com>
 */
class Cbssn_channels_links_Activator {

	/**
	 * Plugin activation
	 *
	 * Activation getting data from json files and create or refresh data in wp_option.
	 * about the constant and changeable internet channels for CBSSN translations
	 * @since    1.0.0
	 */
	public static function activate() {

		$requiredFileLink  = plugins_url('json/required.json', dirname(__FILE__));
		$currentFileLink   = plugins_url( 'json/current.json', dirname(__FILE__));

		//Start loading or initialise option channels_required to save data from JSON file to option about required channels

		$fileRequired = file_get_contents($requiredFileLink) ;
		$requiredJson = json_decode($fileRequired,TRUE) ;

		$requiredChannels =  array();
		foreach ($requiredJson as  $channel) {
			$requiredChannels[] = $channel ;
		}

		if ( !get_option( 'cbssn_channels_required' ) ) {
			add_option( 'cbssn_channels_required', $requiredChannels );
		}else{
			update_option('cbssn_channels_required',$requiredChannels) ;
		}

		//Start loading or initialise option channels_current to save data from JSON file to option about current channels

		$fileCurrent = file_get_contents($currentFileLink) ;
		$currentJson = json_decode($fileCurrent,TRUE) ;

		$currentChannels =  array();
		foreach ($currentJson as  $channel) {
			$currentChannels[] = $channel ;
		}

		if ( !get_option( 'cbssn_channels_current' ) ) {
			add_option( 'cbssn_channels_current', $currentChannels );
		}else{
			update_option( 'cbssn_channels_current', $currentChannels );
		}

		unset($fileRequired);
		unset($fileRequired);
		unset($requiredChannels);
		unset($currentChannels);

	}

}
