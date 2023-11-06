<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

if (!function_exists('child_theme_configurator_js')) :
    function child_theme_configurator_js()
        {
        wp_enqueue_script('maskedinputjs', get_stylesheet_directory_uri() . '/assets/jquery.maskedinput.js', array('jquery'), null, true);
        wp_enqueue_script('maskjs', get_stylesheet_directory_uri() . '/assets/phonemask.js', array('jquery'), null, true);
        wp_enqueue_script('kwinsjs', get_stylesheet_directory_uri() . '/assets/kwins.js', array('jquery'), null, true);
    }
    endif;
    
add_action('wp_enqueue_scripts', 'child_theme_configurator_js', 10);

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Параметры',
        'menu_title'    => 'Параметры',
        'menu_slug'     => 'general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'position'      => '25.1',
    ));
}

