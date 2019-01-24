<?php
/*
Plugin Name: Bands
Plugin URI: https://github.com/sergeycode/wp-bands-plugin
Description: Custom Post Type Plugin For You Favourite Bands
Version: 1.0
Author: Sergey Ovcharenko
Author URI: http://sergeycode.github.io
Text Domain: bands
*/

//Setup
define('BANDS_PLUGIN_URL', __FILE__);

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there, hacker! Sorry, but direct access is not allowed.';
	exit;
}

//Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/init.php');
include('process/save_post.php');
include('process/filter-content.php');

//Hooks
register_activation_hook( __FILE__, 'bands_activate_plugin' );
add_action('init', 'bands_init');
add_action('admin_init', 'bands_admin_init');
add_action('save_post_bands', 'bands_save_admin', 10, 3);
add_filter('the_content', 'bands_filter_content');

//Shortcodes