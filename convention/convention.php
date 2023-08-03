<?php
/*
Plugin Name: Convention
Plugin URI:https://csftk.com/
Description:Plugin de gestion des conventions
Author:Abdelhak chabeni
Version:1.0
Author URI:https://csftk.com/contact
*/

register_activation_hook(__FILE__, 'convention_activate');
register_deactivation_hook(__FILE__, 'convention_deactivate');

function convention_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/convention_loader.php';
    $loader = new ConventionLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function convention_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/convention_loader.php';
    $loader = new ConventionLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}
