<?php

add_action('wp_enqueue_scripts', 'load_stylesheets');
function load_stylesheets() {
    wp_enqueue_style('bootstrapStyle', get_template_directory_uri() . '/common/styles/bootstrap.min.css',false,'1.1','all');
    wp_enqueue_style('allStyle', get_template_directory_uri() . '/common/styles/all.min.css',false,'1.1','all');
    wp_enqueue_style('swiperStyle', get_template_directory_uri() . '/common/styles/swiper.min.css',false,'1.1','all');
    wp_enqueue_style('customStyle', get_template_directory_uri() . '/common/styles/custom.css',false,'1.1','all');
}


//load scripts
function load_script() {
    wp_register_script( 'jqueryScript', get_template_directory_uri() . '/common/scripts/jquery-3.2.1.min.js', array (), 1, 1, 1);
    wp_enqueue_script( 'jqueryScript' );
    wp_register_script( 'popperScript', get_template_directory_uri() . '/common/scripts/popper.min.js', array (), 1, 1, 1);
    wp_enqueue_script( 'popperScript' );
    wp_register_script( 'bootstrapScript', get_template_directory_uri() . '/common/scripts/bootstrap.min.js', array (), 1, 1, 1);
    wp_enqueue_script( 'bootstrapScript' );
    wp_register_script( 'allScript', get_template_directory_uri() . '/common/scripts/all.min.js', array (), 1, 1, 1);
    wp_enqueue_script( 'allScript' );
    wp_register_script( 'counterScript', get_template_directory_uri() . '/common/scripts/counter.min.js', array (), 1, 1, 1);
    wp_enqueue_script( 'counterScript' );
    wp_register_script( 'swiperScript', get_template_directory_uri() . '/common/scripts/swiper.min.js', array (), 1, 1, 1);
    wp_enqueue_script( 'swiperScript' );
    wp_register_script( 'customScript', get_template_directory_uri() . '/common/scripts/custom.js', array (), 1, 1, 1);
    wp_enqueue_script( 'customScript' );
}
add_action('wp_enqueue_scripts', 'load_script');


//Customs image size

add_image_size('product_image_small', 400, 400, false);
add_image_size('product_image_large', 700, 700, false);
add_theme_support( 'post-thumbnails' );
add_image_size( 'single-post-thumbnail', 184, 115 );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
    acf_add_options_sub_page('Header');
    acf_add_options_sub_page('Footer');
    acf_add_options_sub_page('Social');
    acf_add_options_sub_page('Our Projects');
}
