<?php

/*
Plugin Name: DAISY TechWatch Newsletter Plugin
Plugin URI: http://www.daisy.org/
Description: Adds custom post type for DAISY TechWatch Newsletter Plugin
Author: Bradford Knowton
Version: 1.18.1
Author URI: http://bradknowlton.com/
License: GPLv2 or later
GitHub Plugin URI: https://github.com/daisy/WP-TechWatch-newsletter-plugin
GitHub Branch:     master
*/

class WPTechWatchNewsletterPlugin {

	/*--------------------------------------------*
	 * Constants
	 *--------------------------------------------*/
	const name = 'WP TechWatch Newsletter Plugin';
	const slug = 'wp_TechWatch_newsletter_plugin';

	/**
	 * Constructor
	 */
	function __construct() {
		//Hook up to the init action
		add_action( 'init', array( &$this, 'init_wp_TechWatch_newsletter_plugin' ) );
	}

	/**
	 * Runs when the plugin is initialized
	 */
	function init_wp_TechWatch_newsletter_plugin() {
		// Load JavaScript and stylesheets
		$this->register_scripts_and_styles();


		if ( is_admin() ) {
			//this will run when in the WordPress admin
		} else {
			//this will run when on the frontend
		}

		$labels = array(
			'name' => _x( 'TechWatch', 'TechWatch' ),
			'singular_name' => _x( 'TechWatch', 'TechWatch' ),
			'add_new' => _x( 'Add New', 'TechWatch' ),
			'add_new_item' => _x( 'Add New TechWatch', 'TechWatch' ),
			'edit_item' => _x( 'Edit TechWatch', 'TechWatch' ),
			'new_item' => _x( 'New TechWatch', 'TechWatch' ),
			'view_item' => _x( 'View TechWatch', 'TechWatch' ),
			'search_items' => _x( 'Search TechWatch', 'TechWatch' ),
			'not_found' => _x( 'No TechWatch found', 'TechWatch' ),
			'not_found_in_trash' => _x( 'No TechWatch found in Trash', 'TechWatch' ),
			'parent_item_colon' => _x( 'Parent TechWatch:', 'TechWatch' ),
			'menu_name' => _x( 'TechWatch', 'TechWatch' ),
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
		register_post_type( 'TechWatch', $args );

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

new WPTechWatchNewsletterPlugin();