<?php
/*
* Plugin Name:Recipe
* Description: A Simple Wordpress plugin to create recipes and rate those recipes
* Version: 1.0
* Author: Syed Shahiq ur Rehman
* Text Domain: recipe
*/

if ( !function_exists('add_action')) {
  die('Hi there!  I\'m just a plugin, not much I can do when called directly.');
}

//Setup

define ('RECIPE_PLUGIN_URL',__FILE__);

//Includes

include ('includes/activate.php');
include ('includes/init.php');
include ('includes/admin/init.php');
//Hooks

register_activation_hook(__FILE__,'r_activate_plugin');
add_action('init','recipe_init');
add_action('admin_init','recipe_admin_init');


//ShortCodes