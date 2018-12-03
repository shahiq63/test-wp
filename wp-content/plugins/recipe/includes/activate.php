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
}