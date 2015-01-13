<?php

/**
 *	Require Once
 */
require_once( 'includes/custom-functions.php' );
require_once( 'includes/customizer.php' );
require_once( 'includes/tgm-plugin-activation/tgm-plugin-activation.php' );

/**
 *  WP Title
 */
function medica_lite_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'medica_lite' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'medica_lite_wp_title', 10, 2 );

/**
 *  Medica Lite Setup
 */
if ( !function_exists( 'medica_lite_setup' ) ) {

    function medica_lite_setup() {

        // Post Thumbnails
        add_theme_support( "post-thumbnails" );

        // Automatic Feed Links
        add_theme_support( "automatic-feed-links" );

        // Title Tag
        add_theme_support( "title-tag" );

        // Custom Header
        $args_custom_header = array(
            'width'         => '180',
            'height'        => '60',
            'flex-height'   => true,
            'header-text'   => true,
            'default-image' => get_template_directory_uri() . '/images/header-logo.png'
        );
        add_theme_support( "custom-header", $args_custom_header );

        // Custom Background
        $args_custom_background = array(
            'default-color'         => '#ffffff',
            'default-repeat'        => 'no-repeat',
            'default-attachment'    => 'fixed'
        );
        add_theme_support( "custom-background", $args_custom_background );

        // Load Plugin Textdomain
        load_plugin_textdomain( 'medica-lite', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); // Load Text Domain

        // Header Navigation
        $header_navigation_args = array(
            'header-navigation' => __( 'This menu will appear in header.', 'medica_lite' ),
        );
        register_nav_menus( $header_navigation_args );

        // Footer Navigation
        $footer_navigation_args = array(
            'footer-navigation' => __( 'This menu will appear in footer.', 'medica_lite' ),
        );
        register_nav_menus( $footer_navigation_args );

        // Add Editor Style
        add_editor_style();

        // The Post Thumbnail
        the_post_thumbnail();

    }

}
add_action( 'after_setup_theme', 'medica_lite_setup' );

/**
 *  Content Width
 */
if ( ! isset( $content_width ) ) $content_width = 634;

/**
 *	WP Enqueue Style Medica
 */
function medica_lite_wp_enqueue_style_medica() {

    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.3' );
    wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri() . '/css/nivo-lightbox.css', array(), '1.2.0' );
    wp_enqueue_style( 'font-family-raleway', '//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900', array(), '1.0' );
    wp_enqueue_style( 'font-family-roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,900italic,900,700italic,700,500italic,500', array(), '1.0' );
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );

    if ( is_rtl() ) {
        wp_enqueue_style( 'rtl', get_template_directory_uri() . '/css/rtl.css', array(), '1.0' );
    }

}
add_action( 'wp_enqueue_scripts', 'medica_lite_wp_enqueue_style_medica' );

/**
 *	WP Enqueue Scripts Medica
 */
function medica_lite_wp_enqueue_scripts_medica() {
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'masonry' );
    wp_enqueue_script( 'nivo-lightbox.min', get_template_directory_uri() . '/js/nivo-lightbox.min.js', array(), '1.2.0', false );
    wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.2', false );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'medica_lite_wp_enqueue_scripts_medica' );

/**
 *  General Sidebar
 */
function medica_lite_general_sidebar() {

    $args = array(
        'id'            => 'general-sidebar',
        'name'          => __( 'General Sidebar', 'medica_lite' ),
        'description'   => __( 'Use this sidebar to display widgets in your website, including posts and pages.', 'medica_lite' ),
        'before_title'  => '<div class="title-widget">',
        'after_title'   => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'medica_lite_general_sidebar' );

/**
 * Load only in IE as of WP 4.1
 */
function medica_lite_html5shiv( $tag, $handle, $src ) {
    if ( 'html5shiv' === $handle ) {
        $tag = "<!--[if lt IE 9]>\n";
        $tag .= "<script type='text/javascript' src='$src'></script>\n";
        $tag .= "<![endif]-->\n";
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'medica_lite_html5shiv', 10, 3 );