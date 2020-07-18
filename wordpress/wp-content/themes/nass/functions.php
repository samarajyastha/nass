<?php
//Load Material Design Bootstrap
function load_stylesheets()
{
    wp_register_style('mdb', get_template_directory_uri() . '/css/mdb.min.css', array(), 1, 'all');
    wp_enqueue_style('mdb');

    wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 1, 'all');
    wp_enqueue_style('carousel');

    wp_register_style('theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), 1, 'all');
    wp_enqueue_style('theme');

    wp_register_style('app', get_template_directory_uri() . '/css/app.css', array(), 1, 'all');
    wp_enqueue_style('app');


    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Load Scripts
function addjs()
{
    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    // Bootstrap tooltips
    wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), 1, 1, 1);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    // MDB core JavaScript
    wp_register_script('mdb', get_template_directory_uri() . '/js/mdb.min.js', array(), 1, 1, 1);
    wp_enqueue_script('mdb');

    wp_register_script('carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script('carousel');

    wp_register_script('carouselTicker', get_template_directory_uri() . '/js/jquery.carouselTicker.min.js', array(), 1, 1, 1);
    wp_enqueue_script('carouselTicker');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'addjs');

// Add menu support
add_theme_support('menus');

// Register menus
register_nav_menus(
    array(
        'main-menu' => __('Main Menu', 'theme')
    )
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu('top', 'Top menu');

add_theme_support('custom-logo');

function themename_custom_logo_setup()
{
    $defaults = array(
        'height'      => 71,
        'width'       => 360,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

function helpwp_custom_logo_output($html)
{
    $html = str_replace('custom-logo-link', 'navbar-brand', $html);
    return $html;
}
add_filter('get_custom_logo', 'helpwp_custom_logo_output', 10);


//Custom image size
add_image_size('image_large', 700, 700, false);
add_image_size('image_small', 400, 400, false);
add_image_size('image_home', 1520, 750, true);
add_image_size('image_academic_programs', 358, 239, true);

add_theme_support('post-thumbnails');

function show_post($path, $item)
{
    $id = get_queried_object_id ();
    $post = get_page_by_path($path);
    $title = apply_filters('the_title', $post->post_title);
    $content = apply_filters('the_content', $post->post_content);
    $featuredImage = get_the_post_thumbnail_url($post->ID, 'full' );


    // the_post_thumbnail();
    switch ($item) {
        case 'title':
            echo $title;
            break;
        case 'content':
            $content = wp_trim_words($content, 100, null);
            echo $content;
            break;
        case 'featuredImage':
            echo $featuredImage;
            break;
    }
    // if($item == 'title')
    //     echo $title;
    // if($item == 'content')
    //     //$content = wp_trim_words($content, 100, null );
    //     echo $content;
}
