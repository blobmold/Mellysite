<?php

get_header();

if(have_posts()) {
    while(have_posts()) {
        the_post();

        echo '<section>';

            the_title('<h2>', '</h2>');
            the_content();

        echo '</section>';

        if ( is_attachment() ) {
            // Parent post navigation.
            the_post_navigation(
                array(
                    /* translators: %s: Parent post link. */
                    'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
                )
            );
        }

        the_post_navigation(
            array(
                'next_text' => '<p class="meta-nav">' . 'Next' . '</p><p class="post-title">%title</p>',
                'prev_text' => '<p class="meta-nav">' . 'Previous' . '</p><p class="post-title">%title</p>',
            )
        );

        // if ( comments_open() || get_comments_number() ) {
        //     comments_template();
        // }
    }
}

get_footer();