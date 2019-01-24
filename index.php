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
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there, hacker! Sorry, but direct access is not allowed.';
	exit;
}

//Includes
include('includes/activate.php');
include('includes/init.php');

//Hooks
register_activation_hook( __FILE__, 'bands_activate_plugin' );
add_action('init', 'bands_init');

//Shortcodes