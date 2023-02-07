<?php

//Add dynamic title tag support
function kns_theme_support(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'kns_theme_support');

function kns_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('kns-general-style', get_template_directory_uri().'/style.css', array(), $version , 'all');
}

add_action('wp_enqueue_scripts','kns_register_styles');


function kns_register_scripts(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_script('kns-main-js', get_template_directory_uri().'/assets/js/main.js', array(), $version , true);
  wp_enqueue_script('mailchimp-js', '//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array(), '1.0' , true);
  wp_enqueue_script('mail-js', get_template_directory_uri().'/assets/js/mail.js', array(), '1.0' , true);
}

add_action('wp_enqueue_scripts','kns_register_scripts');

?>

?>
