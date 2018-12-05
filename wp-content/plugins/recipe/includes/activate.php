<?
function r_activate_plugin() {
  if(version_compare(get_bloginfo('version'),'4.5','<')) {
    wp_die(__('You must update the wordpress to use this is plugin','recipe'));
  }

  global $wpdb;
  $createSQL = "CREATE TABLE `wp_recipe_ratings`
  ( `ID` INT NOT NULL AUTO_INCREMENT , 
  `recipe_id` INT NOT NULL ,
  `rating` FLOAT NOT NULL ,
  `user_ip` VARCHAR(32) NOT NULL ,
   PRIMARY KEY (`ID`)) ENGINE = InnoDB;";

  require_once( ABSPATH .'/wp-admin/includes/upgrade.php');

  dbDelta($createSQL);

  wp_schedule_event(
    time(),
    'daily',
    'r_daily_recipe_hook'
  );

  $recipe_opts = get_option('r_opts');

  if(!$recipe_opts) {
    $opts = [
      'rating_login_required' => 1,
      'recipe_submission_login_required' => 1
    ];
    add_option('r_opts',$opts);
  }

  global $wp_roles;
  add_role(
    'recipe_author',
    __( 'Recipe Author', 'recipe' ),
    array(
      'read' =>  true,
      'edit_posts' => true,
      'upload_files' => true
    )
  ); 
}