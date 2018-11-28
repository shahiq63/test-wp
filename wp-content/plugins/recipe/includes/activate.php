<?
function r_activate_plugin() {
  if(version_compare(get_bloginfo('version'),'4.5','<')) {
    wp_die(__('You must update the wordpress to use this is plugin','recipe'));
  }
}