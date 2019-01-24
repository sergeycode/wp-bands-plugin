<?php

//Minimum version of WP to active the plugin
function bands_activate_plugin() {
  if(version_compare(get_bloginfo( 'version'), '4.9', '<')) {
    wp_die(__('You must update WordPress to you this plugin'), 'bands');
  }
}