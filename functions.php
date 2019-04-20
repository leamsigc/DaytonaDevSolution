<?php
// Get all styles for the Daytona Dev Solutions
function DDS_files()
{
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,700,900');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('DDS_main_styles', get_stylesheet_uri());

    // Get all the scripts
    wp_enqueue_script('jquery-min', get_theme_file_uri() . '/assets/js/jquery.min.js', '', '', true);
    wp_enqueue_script('scrollex', get_theme_file_uri() . '/assets/js/jquery.scrollex.min.js', '', '', true);
    wp_enqueue_script('scrolly', get_theme_file_uri() . '/assets/js/jquery.scrolly.min.js', '', '', true);
    wp_enqueue_script('browser', get_theme_file_uri() . '/assets/js/browser.min.js', '', '', true);
    wp_enqueue_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', '', '', true);
    wp_enqueue_script('util', get_theme_file_uri() . '/assets/js/util.js', '', '', true);
    wp_enqueue_script('main', get_theme_file_uri() . '/assets/js/main.js', null, microtime(), true);

}

// Add action to WordPress
add_action('wp_enqueue_scripts', 'DDS_files');

function DDS_features()
{
    add_theme_support('title-tag');
    //Register nav menu
    register_nav_menu('headerMenuLocation', 'Main header Menu Nav');

    register_nav_menu('footerLocationOne', 'Footer location menu one ');
    register_nav_menu('footerLocationTwo', 'Footer location menu Two');
}
add_action('after_setup_theme', 'DDS_features');
