<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/OlderFisher
 * @since      1.0.0
 *
 * @package    Cbssn_channels_links
 * @subpackage Cbssn_channels_links/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cbssn_channels_links
 * @subpackage Cbssn_channels_links/admin
 * @author     Aleksandr Lilik <lilik.aleksandr@gmail.com>
 */
class Cbssn_channels_links_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cbssn_channels_links_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cbssn_channels_links_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/cbssn_channels_links-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cbssn_channels_links_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cbssn_channels_links_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// Installing Vue for admin plugin frontend part

		wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js',array(), $this->version,false) ;
		wp_enqueue_script($this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cbssn_channels_links-admin.js',array(), $this->version,true) ;


	}

	public function cbssn_add_admin_panel(){
		add_menu_page( 'CBSSN Channels List admin panel', 'CBSSN Channels', 'manage_options', 'cbssn_channels_list', array($this,'cbssn_channels_settings'), '', 83 );
	}

	public function cbssn_channels_settings(){
		require_once plugin_dir_path( __FILE__ ) . 'partials/cbssn_channels_links-admin-display.php';
	}

}
