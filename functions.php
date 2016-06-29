<?php

/**
 * Including Redux options
 */
require_once ( dirname(__FILE__) . '/redux/config.php' );


/**
 * Importing stylesheet from parent theme
 */
function import_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'import_parent_styles' );


/**
 * Filtering WordPress search query to exclude posts from search results
 */
function exclude_posts_from_search( $query ) {

    if( !is_admin() && $query->is_search ) {
        $query->set( 'post_type', 'page' );
    }

    return $query;
}

add_filter( 'pre_get_posts', 'exclude_posts_from_search' );

