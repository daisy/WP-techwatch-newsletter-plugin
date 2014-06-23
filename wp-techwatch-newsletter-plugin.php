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

		$labels = array(
			'name' => _x( 'TechWatch', 'techwatch' ),
			'singular_name' => _x( 'TechWatch', 'techwatch' ),
			'add_new' => _x( 'Add New', 'techwatch' ),
			'add_new_item' => _x( 'Add New TechWatch', 'techwatch' ),
			'edit_item' => _x( 'Edit TechWatch', 'techwatch' ),
			'new_item' => _x( 'New TechWatch', 'techwatch' ),
			'view_item' => _x( 'View TechWatch', 'techwatch' ),
			'search_items' => _x( 'Search TechWatch', 'techwatch' ),
			'not_found' => _x( 'No techwatch found', 'techwatch' ),
			'not_found_in_trash' => _x( 'No techwatch found in Trash', 'techwatch' ),
			'parent_item_colon' => _x( 'Parent TechWatch:', 'techwatch' ),
			'menu_name' => _x( 'TechWatch', 'techwatch' ),
		);
		$args = array(
			'labels' => $labels,
			'hierarchical' => false,
			'supports' => array( 'title',  'author', 'custom-fields', 'revisions' ), // 'editor',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'show_in_nav_menus' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'has_archive' => true,
			'query_var' => true,
			'can_export' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'menu_icon' => 'dashicons-search'
		);
		register_post_type( 'techwatch', $args );

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