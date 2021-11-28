<?php

get_header();

if ( have_posts() ) {
    while (have_posts()) {
        the_post();
        the_title(); ?>
        <p> La référence :
            <?php the_field('reference'); ?>
        </p> <?php
        the_excerpt();
        the_field('content');
    }
}

get_footer();
