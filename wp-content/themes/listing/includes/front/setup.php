<?php

function ju_setup_theme() {
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  register_nav_menu('primary',__('Primary Menu','Theme Test Menu'));
  register_nav_menu('secondary',__('Secondary Menu','Theme Test Menu'));
  
  if (function_exists('quads_register_ad')){
    quads_register_ad( array('location' => 'udemy_header', 'description' => 'Udemy Header position') );
    //quads_register_ad( array('location' => 'footer', 'description' => 'Footer position') );
    //quads_register_ad( array('location' => 'custom', 'description' => 'Custom position') );
  }
}