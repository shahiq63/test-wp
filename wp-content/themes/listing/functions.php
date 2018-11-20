<?php

//Setup

//Includes

include(get_template_directory(). '/includes/front/enqueue.php');
include(get_template_directory(). '/includes/front/setup.php');
include(get_template_directory(). '/includes/front/widgets.php');
//Hooks

add_action('wp_enqueue_scripts','ju_enqueue');
add_action('after_setup_theme','ju_setup_theme');
add_action('widgets_init','ju_widgets');
//ShortCodes
