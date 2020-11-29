<?php
add_action( 'after_setup_theme', 'kau_blog_theme_setup' );
function kau_blog_theme_setup() {

    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-templates');

    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption',));
    add_theme_support('custom-logo');
    add_editor_style();
    add_theme_support( 'custom-background', array(
		'default-color' => 'AD7FEB'
	) );
    register_nav_menus( array(
		'primary' => __( 'Kau Primary Menu'),		
	) );
}

/**
 * kau Theme Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'kau_theme_blog_scripts');
function kau_theme_blog_scripts() {
    
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap');
    wp_enqueue_style('kau-theme-style', get_stylesheet_uri());
    wp_enqueue_style('kau-theme-kau-navigation', get_template_directory_uri() . '/assets/css/top-navbar.css');
    wp_enqueue_script('kau-theme-kau-navigation', get_template_directory_uri() . '/assets/js/kau-navigation.js');
    
    
    echo '<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
    echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
    
    if (is_front_page()) {
        echo '<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>';
        echo "<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>";

        

        echo '<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">';
        echo '<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>';
        wp_enqueue_style('kau-theme-font-page-css', get_template_directory_uri() . '/assets/css/kau-font-page.css');
        wp_enqueue_script('kau-theme-font-page-js', get_template_directory_uri() . '/assets/js/kau-font-page.js');
        
  }
}

add_action('widgets_init', 'kau_register_sidebars');

function kau_register_sidebars() {

    register_sidebar(array(
        'name' => __('Post Right Sidebar'),
        'id' => __('kau-sidebar-one'),
        'description' => __('Theme Post sidebar widget area'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

require get_template_directory() . '/inc/front-page-customizer.php';
require get_template_directory() . '/inc/kau-custom-header.php';
