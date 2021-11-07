<?php
/**
 * Add dynamic title tag support
 */
add_theme_support('title-tag');

/**
 * Register Styles
 */

function gp_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('gp-melly_style', get_stylesheet_uri(), [], $version, 'all');
}
add_action('wp_enqueue_scripts', 'gp_register_styles');

/**
 * Register Scripts
 */

function gp_register_scripts() {
    $version = '1.0';
    wp_enqueue_script('gp-melly_script', get_template_directory_uri() . '/assets/js/main.js', [], $version, true);
}
add_action('wp_enqueue_scripts', 'gp_register_scripts');

/**
 * Register Nav Menus
 */
function gp_register_menu() {
    register_nav_menus(
        [
            'hamburger' => __('Hamburger Menu'),
        ]
    );
}

add_action('after_setup_theme', 'gp_register_menu');

/**
 * Even though it is possible to change li classes from Wordpress CMS,
 * it is better to have it here as it prevents accidental change
 * location: Appearance/Menus/Screen Options/CSS Classes
 */

function gp_nav_add_li_classes($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'gp_nav_add_li_classes', 1, 3);



// add_filter( 'display_post_states', 'ecs_add_post_state', 10, 2 );

// function ecs_add_post_state( $post_states, $post ) {

// 	if( $post->post_name == 'about' ) {
// 		$post_states[] = 'About';
// 	}

// 	return $post_states;
// }


add_filter('display_post_states', 'wpse240081_custom_post_states', 10, 2);

function wpse240081_custom_post_states( $states, $post ) {
    
    // if is list page and name template file php...
    if ( ( 'page' == get_post_type( $post->ID ) ) && ( 'your-template-name.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) ) {

        $states[] = __('Custom state');
    }

    return $states;
} 