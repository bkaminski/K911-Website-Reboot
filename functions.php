<?php

//Load Main Scripts
function enqueue_k911_scripts()
{
    wp_enqueue_script('Ajax-Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('Bootstrap-4x-JS', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome-cdn', 'https://use.fontawesome.com/f8e30bcf42.js', false, null, true, null);
    wp_enqueue_script('k911-scripts', get_template_directory_uri() . '/js/k911.js', array('jquery'), null, true, null);
    
}
add_action('wp_enqueue_scripts', 'enqueue_k911_scripts');

//Load CSS
function enqueue_k911_styles()
{
    wp_enqueue_style('bootstrap4.0beta-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('k911-styles', get_template_directory_uri() . '/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_k911_styles');

//Hide admin bar from front of site
show_admin_bar(false);