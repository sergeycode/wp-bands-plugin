<?php


function bands_save_admin($post_id, $post, $update) {
  if(!$update) {
    return;
  }

  $bands_data                = array();
  $bands_data['name']        = sanitize_text_field($_POST['bands_name']);
  $bands_data['origin']      = sanitize_text_field($_POST['bands_origin']);
  $bands_data['genre']       = sanitize_text_field($_POST['bands_genre']);
  $bands_data['years']       = sanitize_text_field($_POST['bands_years']);
  $bands_data['labels']      = sanitize_text_field($_POST['bands_labels']);
  $bands_data['website']     = sanitize_text_field($_POST['bands_website']);
  $bands_data['members']     = sanitize_text_field($_POST['bands_members']);
  
  update_post_meta($post_id, 'bands_data', $bands_data);
}
