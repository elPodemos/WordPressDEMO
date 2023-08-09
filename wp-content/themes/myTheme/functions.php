<?php


// pour mettre le title + img
function montheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'montheme_supports');

function montheme_register_assets()
{
    wp_enqueue_style(
        'montheme',
        get_template_directory_uri() . '/assets/style/css/main.css'
    );
    wp_enqueue_style('montheme');


    wp_register_style(
        'bootstrap',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css'
    );
    wp_enqueue_style('bootstrap');

    wp_register_script(
        'bootstrap',
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js'
    );
    wp_enqueue_script('bootstrap');

    wp_enqueue_script(
        'montheme',
        get_template_directory_uri() . '/assets/script/main.js'
    );
    wp_enqueue_script('montheme');
}

add_action('wp_enqueue_scripts', 'montheme_register_assets');

function change_separator($sep)
{
    return '|';
}

function change_excerpt_length($length)
{
    return 2;
}

function uppercase_title($title)
{
    $title = strtoupper($title);
    return $title;
}

function quotation_title($title)
{
    $title = '"' . $title . '"';
    return $title;
}

add_filter('the_title', 'quotation_title');
add_filter('the_title', 'uppercase_title');
add_filter("document_title_separator", "change_separator");
add_filter("excerpt_length", "change_excerpt_length");
