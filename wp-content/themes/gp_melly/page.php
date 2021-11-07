<?php

get_header();

echo '<section>';

the_title('<h2>', '</h2>');

while (have_posts()) {
    the_post();
    if (is_page('contact-me')) {
        get_template_part('template-parts/content-contact_me');
    } else {
        get_template_part('template-parts/content-page');
    }
}

echo '</section>';

get_footer();
