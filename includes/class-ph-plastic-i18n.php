<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://aniskhan001.me
 * @since      1.0.0
 *
 * @package    Ph_Plastic
 * @subpackage Ph_Plastic/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ph_Plastic
 * @subpackage Ph_Plastic/includes
 * @author     Anisuzzaman Khan <aniskhan001@gmail.com>
 */
class Ph_Plastic_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ph-plastic',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
