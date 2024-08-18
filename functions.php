<?php

/**
 * @package Bootscore Child
 *
 * @version 6.0.0
 */


// Exit if accessed directly
defined('ABSPATH') || exit;


/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  
  // custom.js
  // Get modification time. Enqueue file with modification date to prevent browser from loading cached scripts when file content changes. 
  $modificated_CustomJS = date('YmdHi', filemtime(get_stylesheet_directory() . '/assets/js/custom.js'));
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), $modificated_CustomJS, false, true);
}

/**
 * Change to-top button classes
 */
function footer_to_top_button_class() {
    return "d-none";
}
add_filter('bootscore/class/footer/to_top_button', 'footer_to_top_button_class', 10, 2);

/**
 * Hide meta post author
 */
function hide_author_function($display_author) {
    return false;
}
add_filter('bootscore/meta/author', 'hide_author_function');

/**
 * Hide meta post updated time
 */
function disable_updated_time_display($show_updated_time) {
    return false;
}
add_filter('bootscore/meta/time/updated', 'disable_updated_time_display');

/**
 * Change footer column wrapper classes
 */
function footer_class() {
    return "rounded-top pt-5 pb-4";
}
add_filter('bootscore/class/footer/columns', 'footer_class', 10, 2);

/**
 * Change footer 1 col
 */
function footer_col_4_class($string, $location) {
    if ($location == 'footer-4') {
        return "d-none";
    }
    return $string;
}
add_filter('bootscore/class/footer/col', 'footer_col_4_class', 10, 2);


/**
 * Change footer 2, 3, 4 col
 */
function footer_col_1_2_3_class($string, $location) {
    if ($location == 'footer-1' || $location == 'footer-2' || $location == 'footer-3') {
        return "col-12 col-md-4";
    }
    return $string;
}
add_filter('bootscore/class/footer/col', 'footer_col_1_2_3_class', 10, 2);

/**
 * Change footer info classes
 */
function footer_info_class() {
    return "bg-primary text-light pt-2 pb-3 fs-6";
}
add_filter('bootscore/class/footer/info', 'footer_info_class', 10, 2);