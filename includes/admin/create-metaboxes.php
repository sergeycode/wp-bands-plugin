<?php

function bands_create_metaboxes() {
  add_meta_box(
    'bands_options_mb',
    __('Bands Options', 'bands'),
    'bands_options_mb',
    'bands',
    'normal',
    'high'
  );
}