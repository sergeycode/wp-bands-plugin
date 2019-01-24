<?php

function bands_init() {
    $labels = array(
      'name'               => __( 'Bands', 'bands' ),
      'singular_name'      => __( 'Band', 'bands' ),
      'menu_name'          => __( 'Bands', 'bands' ),
      'name_admin_bar'     => __( 'Band', 'bands' ),
      'add_new'            => __( 'Add New', 'bands' ),
      'add_new_item'       => __( 'Add New Band', 'bands' ),
      'new_item'           => __( 'New Band', 'bands' ),
      'edit_item'          => __( 'Edit Band', 'bands' ),
      'view_item'          => __( 'View Band', 'bands' ),
      'all_items'          => __( 'All Bands', 'bands' ),
      'search_items'       => __( 'Search Bands', 'bands' ),
      'parent_item_colon'  => __( 'Parent Bands:', 'bands' ),
      'not_found'          => __( 'No bands found.', 'bands' ),
      'not_found_in_trash' => __( 'No bands found in Trash.', 'bands' )
    );
  
    $args = array(
      'labels'             => $labels,
                  'description'        => __( 'Custom Post Type for Bands', 'bands' ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'menu_icon'          => 'dashicons-admin-users',
      'rewrite'            => array( 'slug' => 'bands' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 20,
      'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
      'taxonomies'         => array('category', 'post_tag')
    );
  
    register_post_type( 'bands', $args );
}