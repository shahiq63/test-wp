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

//Includes

include ('includes/activate.php');
include ('includes/init.php');
//Hooks

register_activation_hook(__FILE__,'r_activate_plugin');
add_action('init','recipe_init');


//ShortCodes