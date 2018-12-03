<?php

function r_rate_recipe() {
  global $wpdb;

  $output = array('status'=> 1);

  $post_id = absint($_POST['rid']);
  $rating  = round($_POST['rating'],1);
  $user_IP = $_SERVER['REMOTE_ADDR'];

  $rating_count = $wpdb->get_var(
    "SELECT COUNT(*) FROM `wp_recipe_ratings` WHERE recipe_id ='".$post_id."' 
    AND user_ip ='".$user_IP."'"
  );

  if($rating_count > 0) {
    wp_send_json($output);
  }

  $wpdb->insert('wp_recipe_ratings',array(
    'recipe_id' => $post_id,
    'rating'    => $rating,
    'user_ip'   => $user_IP
  ));


  $recipe_data = get_post_meta($post_id ,'recipe_data',true);
  $recipe_data['rating_count']++;
  $recipe_data['rating'] = $wpdb->get_var("SELECT AVG(`rating`) FROM `wp_recipe_ratings` WHERE recipe_id ='".$post_id."'");

  update_post_meta($post_id,'recipe_data',$recipe_data);

  $output['status'] = 2;

  wp_send_json($output);
}