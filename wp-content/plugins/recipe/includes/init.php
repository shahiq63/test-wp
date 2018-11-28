<?php
function recipe_init() {
  $labels = array(
    'name'               => __( 'Recipe', 'recipe' ),
    'singular_name'      => __( 'Recipe','recipe' ),
    'menu_name'          => __( 'Recipes','recipe' ),
    'name_admin_bar'     => __( 'Recipe','recipe' ),
    'add_new'            => __( 'Add New', 'recipe' ),
    'add_new_item'       => __( 'Add New Recipe', 'recipe' ),
    'new_item'           => __( 'New Recipe', 'recipe' ),
    'edit_item'          => __( 'Edit Recipe', 'recipe' ),
    'view_item'          => __( 'View Recipe', 'recipe' ),
    'all_items'          => __( 'All Recipes', 'recipe' ),
    'search_items'       => __( 'Search Recipes', 'recipe' ),
    'parent_item_colon'  => __( 'Parent Recipes:', 'recipe' ),
    'not_found'          => __( 'No Recipes found.', 'recipe' ),
    'not_found_in_trash' => __( 'No Recipes found in Trash.', 'recipe' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Custom Post Type For Recipes.', 'recipe' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'recipe' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 20,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies'         => array('category','post_tag')
  );

  register_post_type( 'recipe', $args );
}