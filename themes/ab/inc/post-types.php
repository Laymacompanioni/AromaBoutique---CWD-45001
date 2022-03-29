<?php
/**
 * Custom post types for this theme.
 *
 * @package Aroma_Boutique
 */

function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Recipes', 'Post type general name', 'ab' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'ab' ),
        'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'ab' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'ab' ),
        'add_new'               => __( 'Add New', 'ab' ),
        'add_new_item'          => __( 'Add New recipe', 'ab' ),
        'new_item'              => __( 'New recipe', 'ab' ),
        'edit_item'             => __( 'Edit recipe', 'ab' ),
        'view_item'             => __( 'View recipe', 'ab' ),
        'all_items'             => __( 'All recipes', 'ab' ),
        'search_items'          => __( 'Search recipes', 'ab' ),
        'parent_item_colon'     => __( 'Parent recipes:', 'ab' ),
        'not_found'             => __( 'No recipes found.', 'ab' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'ab' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ab' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ab' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ab' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ab' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ab' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ab' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ab' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ab' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ab' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ab' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => 'recipes',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );

    register_post_type( 'ab_recipe', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );