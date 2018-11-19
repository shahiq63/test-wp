<?php

function ju_setup_theme() {
  add_theme_support('menus');
  register_nav_menu('primary',__('Primary Menu','Theme Test Menu'));
}