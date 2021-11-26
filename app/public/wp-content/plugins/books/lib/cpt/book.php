<?php

add_action( 'init', function() {
    $labels = array(
    'name'                  => _x( 'Books', 'Post type general name', 'textdomain' ),
    'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
    'menu_name'             => __( 'Livres', 'textdomain'),
    'all_items'             => __( 'Tous les livres', 'textdomain' ),
    'add_new'               => __( 'Ajouter un livre', 'textdomain'),
    );

    $args = array(
        'rewrite'            => array( 'slug' => 'book' ),
        'has_archive'        => true,
        'hierarchical'       => false,
        'public'             => true,
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-book',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'book', $args );

    $labels = array(
        'name'               => _x('Taxonomy', 'taxonomy general name', 'textdomain'),
        'singular_name'      => _x('Taxonomy', 'taxonomy singular name', 'textdomain'),
        'search_items'       => __('Rechercher une Taxonomie', 'textdomain'),
        'all_items'          => __('Toutes les taxonomies', 'textdomain'),
        'menu_name'          => __('Taxonomy', 'textdomain'),
    );

    $args = array(
        'hierarchical'       => true,
        'labels'             => $labels,
        'public'             => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'book-category'),
    );

    register_taxonomy('book-category', array('book'), $args);
});
