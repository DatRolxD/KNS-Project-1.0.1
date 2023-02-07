<?php

function kns_theme_support()
{
    add_theme_support('title-tag');
    
}
add_action('after_setup_theme', 'kns_theme_support');

function kns_register_styles(){

  $version = wp_get_theme()->get('Version');
  wp_enqueue_style( 'kns-general', get_template_directory_uri().'/style.css', array(), $version, 'all');

}

add_action('wp_enqueue_scripts', 'kns_register_styles');

function kns_register_scripts(){

  $version = wp_get_theme()->get('Version');
  wp_enqueue_script( 'kns-main', get_template_directory_uri().'/assets/js/main.js', array(), $version, true);
  wp_enqueue_script( 'mailchimp-insert', get_template_directory_uri().'/assets/js/mailchimp-insert.js', array(), $version, true);
  wp_enqueue_script( 'mailchimp', '//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array(), $version, true);
}

add_action('wp_enqueue_scripts', 'kns_register_scripts');



?>