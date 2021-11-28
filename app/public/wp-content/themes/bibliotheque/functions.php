<?php

function bibliotheque_assets() {
    wp_enqueue_style('twentytwenty/app_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'bibliotheque/app_css', get_stylesheet_directory_uri() . '/assets/css/app.css', [], "1.0");
}
add_action( 'wp_enqueue_scripts', 'bibliotheque_assets' );

add_action('after_setup_theme', function(){
    add_theme_support('post-thumbnails');
});

add_image_size('book-image', 200, 200, true);


$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
    'posts_per_page' => 2,
    'category_name' => 'archive-book',
    'paged' => $paged,
);

$the_query = new WP_Query( $args );
