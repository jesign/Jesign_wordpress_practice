<?php 
/*
	Plugin Name: Recipe
	Description: practice practice lang sa ta
	Version: 1.0
	Author: Jesign
	Author URI: http://Jesign.com
	Text Domain: recipe
*/

function r_activate_plugin(){
	if( version_compare(get_bloginfo('version'), '4.2', '<')){
		wp_die( __('You must update Wordpress to use this plugin.', 'recipe'));
	}

	global $wpdb;
	$createSQL	=	"
		CREATE TABLE `" . 	$wpdb->prefix . "recipe_ratings` (
		  `id` bigint(20) UNSIGNED NOT NULL,
		  `recipe_id` bigint(20) UNSIGNED NOT NULL,
		  `rating` float UNSIGNED NOT NULL,
		  `user_ip` varchar(32) NOT NULL
		) ENGINE=InnoDB " . $wpdb->get_charset_collate() . " AUTO_INCREMENT=1 ;
	";

	require( ABSPATH . '/wp-admin/includes/upgrade.php');

	dbDelta($createSQL);

	wp_schedule_event( time(), 'daily', 'r_daily_recipe_hook' );
}