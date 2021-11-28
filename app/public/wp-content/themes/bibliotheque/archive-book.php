<?php

get_header();

if ( have_posts() ) {
    while (have_posts()) { ?>
            <?php
        the_post();
        the_title(); ?>
        <?php if (has_post_thumbnail()) { ?>
        <?php the_post_thumbnail('book-image');
        }
        ?>
        <p> La référence :
        <?php the_field('reference'); ?>
        </p> <a href="<?php the_permalink(); ?>"> <input type="button" value="En savoir plus"> </a> </br>
        <?php
    }
}

get_footer();
