<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function register_my_menu() {
    register_nav_menus( array(
        'header' => __( 'Header Menu', 'ocean-child' )
    ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
    register_nav_menus(
        array(
            'footer' => __( 'Pied de Page' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );
// ceci est l'admin 
function add_admin_link_to_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté et si c'est le menu "header"
    if ( is_user_logged_in() && $args->theme_location == 'header' ) {
        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';
        $items .= $admin_link; 
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );

// Shortcode pour l'image fraise
function afficher_image_fraise() {
    $image_fraise = get_field('image_fraise');
    if( $image_fraise ) {
        return '<img src="' . esc_url($image_fraise['url']) . '" alt="' . esc_attr($image_fraise['alt']) . '" />';
    }
    return '';
}
add_shortcode('image_fraise', 'afficher_image_fraise');

// Shortcode pour l'image pamplemousse
function afficher_image_pamplemousse() {
    $image_pamplemousse = get_field('image_pamplemousse');
    if( $image_pamplemousse ) {
        return '<img src="' . esc_url($image_pamplemousse['url']) . '" alt="' . esc_attr($image_pamplemousse['alt']) . '" />';
    }
    return '';
}
add_shortcode('image_pamplemousse', 'afficher_image_pamplemousse');

// Shortcode pour l'image framboise
function afficher_image_framboise() {
    $image_framboise = get_field('image_framboise');
    if( $image_framboise ) {
        return '<img src="' . esc_url($image_framboise['url']) . '" alt="' . esc_attr($image_framboise['alt']) . '" />';
    }
    return '';
}
add_shortcode('image_framboise', 'afficher_image_framboise');

// Shortcode pour l'image citron
function afficher_image_citron() {
    $image_citron = get_field('image_citron');
    if( $image_citron ) {
        return '<img src="' . esc_url($image_citron['url']) . '" alt="' . esc_attr($image_citron['alt']) . '" />';
    }
    return '';
}
add_shortcode('image_citron', 'afficher_image_citron');
