<?php
function ju_widgets() {
  register_sidebar(array(
    'name' => __('My First side bar','listing') ,
    'id'=> 'listting_sidebar',
    'description'=>__('Side bar for listing theme','listing'),
    'before_widget' =>'<div id="%1$s" class="widget clearfix %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => "</h2>",
  ));
  register_sidebar(array(
    'name' => __('My Second side bar','listing') ,
    'id'=> 'listing_sidebar_Second',
    'description'=>__('Sidebar for listing theme','listing')
  ));
}