<?php

function bands_admin_init() {
  include('create-metaboxes.php');
  include('bands-options.php');
  include('enqueue.php');


  add_action('add_meta_boxes_bands', 'bands_create_metaboxes');
  add_action('admin_enqueue_scripts', 'bands_admin_enqueue');
}