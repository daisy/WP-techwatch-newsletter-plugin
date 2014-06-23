<?php

/*
Plugin Name: WP Techwatch Newsletter Plugin
Plugin URI: http://www.daisy.org/
Description: Used by millions to make WP better.
Author: Bradford Knowton
Version: 1.16
Author URI: http://bradknowlton.com/
License: GPLv2 or later

*/

class WPTechwatchNewsletterPlugin {

	/*--------------------------------------------*
	 * Constants
	 *--------------------------------------------*/
	const name = 'WP Techwatch Newsletter Plugin';
	const slug = 'wp_techwatch_newsletter_plugin';
	
	/**
	 * Constructor
	 */
	function __construct() {
		//Hook up to the init action
		add_action( 'init', array( &$this, 'init_wp_techwatch_newsletter_plugin' ) );
	}
  
	/**
	 * Runs when the plugin is initialized
	 */
	function init_wp_techwatch_newsletter_plugin() {
		// Load JavaScript and stylesheets
		$this->register_scripts_and_styles();

	
		if ( is_admin() ) {
			//this will run when in the WordPress admin
		} else {
			//this will run when on the frontend
		}

	}

  
	/**
	 * Registers and enqueues stylesheets for the administration panel and the
	 * public facing site.
	 */
	private function register_scripts_and_styles() {
		if ( is_admin() ) {

		} else {

		} // end if/else
	} // end register_scripts_and_styles
  
} // end class

new WPTechwatchNewsletterPlugin();