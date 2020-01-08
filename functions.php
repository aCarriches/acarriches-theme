<?php

function theme_styles()
{
  wp_enqueue_style( 'theme_css', get_template_directory_uri() . '/public/css/app.css');
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );