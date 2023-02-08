<?php

if (!function_exists('kns_setup')):
  /**
   * Sets up theme defaults and registers support for various
   * WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme
   * hook, which runs before the init hook. The init hook is too late
   * for some features, such as indicating support post thumbnails.
   */
  function kns_setup()
  {

    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain('myfirsttheme', get_template_directory() . '/languages');

    /**
     * Add default posts and comments RSS feed links to <head>.
     */
    add_theme_support('automatic-feed-links');

    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable support for the following post formats:
     * aside, gallery, quote, image, and video
     */
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
  }
endif; // myfirsttheme_setup
add_action('after_setup_theme', 'kns_setup');


function kns_theme_support()
{
  add_theme_support('title-tag');

}
add_action('after_setup_theme', 'kns_theme_support');


function kns_register_styles()
{

  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('kns-font', get_template_directory_uri() . '/aversion/styles/fonts/font-style.css', array(), $version, 'all');
  wp_enqueue_style('kns-general', get_template_directory_uri() . '/style.css', array(), $version, 'all');

}

add_action('wp_enqueue_scripts', 'kns_register_styles');

function kns_register_scripts()
{

  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('kns-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
  wp_enqueue_script('mailchimp', '//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'kns_register_scripts');

/* Menu */
function kns_menus()
{
  $locations = array(
    'primary' => 'Primary Navigation Menu',
  );
  register_nav_menus($locations);
}
add_action('init', 'kns_menus');

/* Logo */
function kns_custom_logo_setup()
{
  $defaults = array(
    'height' => 100,
    'width' => 400,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array('site-title', 'site-description'),
    'unlink-homepage-logo' => true,
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'kns_custom_logo_setup');





?>