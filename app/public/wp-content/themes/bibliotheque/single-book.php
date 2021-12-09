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

        if (function_exists('book_related_posts')) {
            $related_posts = book_related_posts();
            if ($related_posts && $related_posts->have_posts()) {
                ?>
                <h2> Evenement relation </h2>
                <?php
                while ($related_posts->have_posts()) {
                    $related_posts->the_post();
                    the_title(); ?>
                    </br>
                    <?php
                }
            }
        }
    }
}

get_footer();
