<?php

function book_related_posts($id = 0) {
    $id = $id === 0 ? get_the_ID() : $id;
    $terms = get_the_terms($id, 'book-category');

    if(!$terms){
        return false;
    }

    $terms = $terms[0]->slug;

    $args = [
        'post_type' => 'book', // slug du type de contenu personnalisé
        'posts_per_page' => 2,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post__not_in' => [$id],
        'tax_query' => [
            [
                'taxonomy' => 'book-category', // désignation de l'alias / slug de la taxonomy
                'field' => 'slug', // champs à exploiter sur la requête
                'terms' => 'old', // alias/slug à rechercher
            ]
        ]
    ];
    return new WP_Query($args);
}
