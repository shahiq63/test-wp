<?php
function r_admin_enqueue() {

    wp_register_style(
        'ju_bootstrap',
        plugins_url('/assets/css/bootstrap.css',RECIPE_PLUGIN_URL)
    );
    wp_enqueue_style('ju_bootstrap');
}