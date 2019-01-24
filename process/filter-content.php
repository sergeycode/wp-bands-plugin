<?php

function bands_filter_content($content) {
  if(!is_singular('bands')) {
    return $content;
  }

  global $post;
  $bands_data = get_post_meta($post->ID, 'bands_data', true);
  $bands_html = file_get_contents('bands-template.php', true);
  $bands_html = str_replace('NAME_PH', $bands_data['name'], $bands_html);
  $bands_html = str_replace('ORIGIN_PH', $bands_data['origin'], $bands_html);
  $bands_html = str_replace('GENRE_PH', $bands_data['genre'], $bands_html);
  $bands_html = str_replace('YEARS_PH', $bands_data['years'], $bands_html);
  $bands_html = str_replace('LABELS_PH', $bands_data['labels'], $bands_html);
  $bands_html = str_replace('WEBSITE_PH', $bands_data['website'], $bands_html);
  $bands_html = str_replace('MEMBERS_PH', $bands_data['members'], $bands_html);

  return $bands_html . $content;
}