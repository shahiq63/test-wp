<?php

function ju_setup_theme() {
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('automatic-feed-links');
  add_theme_support('html5',array('comment-list','comment-form','gallery','caption'));
  add_theme_support('post-formats',array('aside','gallery','link','image','quote','video','audio'));
  add_theme_support('woocommerce');

  $starter_content= array(
    'widgets'=> array(
      'listting_sidebar'=>  array(
        'text_business_info',
        'search',
        'text_about',
      )
    ),
    'attachments'=> array(
      'image-about'=> array(
        'post_title'=>__('About','listing'),
        'file'=>'assets/images/about/2.jpg'
      )
    ),
    'posts'=> array(
      'home'=>  array(
        'thumbnail' => '{{image-about}}'
      ),
      
      'about'=> array(
        'thumbnail' => '{{image-about}}'
      ),
      
      'contact'=> array(
        'thumbnail' => '{{image-about}}'
      ),
      
      'blog'=>  array(
        'thumbnail' => '{{image-about}}'
      ),
      
      'homepage-section'=>  array(
        'thumbnail' => '{{image-about}}'
      )
    ),

    'options'=> array(
      'show_on_front'=>'page',
      'page_on_front'=>'{{home}}',
      'page_for_posts'=>'{{blog}}',
    ),
    'theme_mods'=> array(
      'ju_facebook_handle'=>'udemy',
      'ju_twitter_handle'=>'udemy',
      'ju_instagram_handle'=>'udemy',
      'ju_phone_handle'=>'udemy',
      'ju_email_handle'=>'udemy',
      'ju_header_show_search'=>'yes',
      'ju_header_show_cart'=>'yes',

    ),
    'nav_menus'=> array(
      'primary'=> array(
        'name'=> __('Primary Menu','Listing'),
        'items'=> array(
          'link_home',
          'page_about',
          'page_blog',
          'page_contact',
        )
      ),
      'secondary'=> array(
        'name'=> __('Primary Menu','Listing'),
        'items'=> array(
          'link_home',
          'page_about',
          'page_blog',
          'page_contact',
        )
      ),

    ),
  );

  add_theme_support('starter-content',$starter_content);

  register_nav_menu('primary',__('Primary Menu','Theme Test Menu'));
  register_nav_menu('secondary',__('Secondary Menu','Theme Test Menu'));
  
  if (function_exists('quads_register_ad')){
    quads_register_ad( array('location' => 'udemy_header', 'description' => 'Udemy Header position') );
    //quads_register_ad( array('location' => 'footer', 'description' => 'Footer position') );
    //quads_register_ad( array('location' => 'custom', 'description' => 'Custom position') );
  }
}