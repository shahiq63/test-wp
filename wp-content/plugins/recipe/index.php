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
include ('includes/process/save-post.php');
include ('includes/process/filter-content.php');
include ('includes/front/enqueue.php');
include ('includes/process/rate-recipe.php');
include (dirname(RECIPE_PLUGIN_URL).'/includes/widgets.php');
include ('includes/widgets/daily-recipe.php');
include ('includes/cron.php');
include ('includes/deactivate.php');

//Hooks

register_activation_hook(__FILE__,'r_activate_plugin');
register_deactivation_hook(__FILE__,'r_deactivate_plugin');

add_action('init','recipe_init');
add_action('admin_init','recipe_admin_init');
add_action('save_post_recipe','r_save_post_recipe',10,3);
add_action('the_content','r_filter_recipe_content');
add_action('wp_enqueue_scripts','r_styles_add',100);
add_action('wp_ajax_r_rate_recipe','r_rate_recipe');
add_action('wp_ajax_nopriv_r_rate_recipe','r_rate_recipe');
add_action('widgets_init','r_widgets_init');
add_action('r_daily_recipe_hook','r_generate_daily_recipe');

//ShortCodes