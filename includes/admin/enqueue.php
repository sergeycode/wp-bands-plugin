<?php

function bands_admin_enqueue() {

  global $typenow;

  if($typenow !== 'bands') {
    return;
  }

  wp_register_style('bands_style', plugins_url('/assets/styles/bootstrap.min.css', BANDS_PLUGIN_URL));
  wp_enqueue_style('bands_style');
}