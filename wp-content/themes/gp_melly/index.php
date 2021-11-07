<?php

get_header();

echo '<section>';

    if(is_home()) {
        echo '<h2>Blog</h2>';
    } else {
        the_title('<h2>', '</h2>');
    }

    while(have_posts()) {
        the_post();
        get_template_part('template-parts/content-page');
    }

echo '</section>';

get_footer();