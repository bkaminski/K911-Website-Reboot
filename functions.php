<?php

//Load Main Scripts
function enqueue_k911_scripts()
{
    wp_enqueue_script('Ajax-Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('Bootstrap-4x', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', false, null, true, null);
    wp_enqueue_script('k911-scripts', get_template_directory_uri() . '/js/k911.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_k911_scripts');

//Load CSS
function enqueue_k911_styles()
{
    wp_enqueue_style('bootstrap4.0-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('k911-styles', get_template_directory_uri() . '/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_k911_styles');

//Hide admin bar from front of site
show_admin_bar(false);

//Allow post and page "featured image"
add_theme_support('post-thumbnails');

//Allow RSS Feeds
add_theme_support('automatic-feed-links');

//Allow post formats
add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

// add tag support to pages
function tags_support_all() {
  register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
  if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

// Register Nav Menus
register_nav_menus( array( $location => $description ) );

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => __( 'K911 Menu', 'K911_Theme' ),
) );
// Nav Walker

//Wordpress Fluid Images Bootstrap 4.0.0-alpha.6
function bootstrap_fluid_images( $html ){
  $classes = 'img-fluid'; // Bootstrap 4.0.0-alpha.6
  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . '$2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="'. $classes .'"$2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','bootstrap_fluid_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_fluid_images', 10 );

//Footer Custom Widget Area 1
register_sidebar(array(
  	'name' => __( 'K911 Footer Left Side' , 'K911_Theme' ),
  	'id' => 'k911_footer_menu_left',
  	'description' => __( 'Footer Widget Area' , 'K911_Theme' ),
  	'before_widget' => '',
  	'after_widget'  => '',
  	'before_title' => '<h3 class="text-white"><i class="fas fa-paw fa-fw fa-lg mr-2"></i>',
  	'after_title' => '</h3>'
));

//Change WP Emails and email address away from "WordPress" as sender
function k911_mail_name( $email ){
  return 'K911'; // new email name from sender.
}
add_filter( 'wp_mail_from_name', 'k911_mail_name' );

function k911_mail_from ($email ){
  return 'k911de@gmail.com'; // new email address from sender.
}
add_filter( 'wp_mail_from', 'k911_mail_from' );

//begin blog page read more button
function excerpt_read_more_link($output)
{
    global $post;
    return $output . '<a class="btn btn-lg btn-info btn-rounded text-uppercase" href="'. get_permalink() . '">Read More <i class="fas fa-angle-double-right fa-fw fa-lg"></i></a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
//end blog page read more button
