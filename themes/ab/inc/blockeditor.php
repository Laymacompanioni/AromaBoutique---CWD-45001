<?php 
/**
 * Functions which enhance the theme by using the block editor into WordPress
 *
 * @package Aroma_Boutique
 */
function ab_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'block-editor-script',
        get_template_directory_url(). '/assets/js/blockeditor.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( get_template_directory(). '/assets/js/blockeditor.js', )
    );
}
add_action( 'enqueue_block_editor_assets', 'ab_myguten_enqueue' );