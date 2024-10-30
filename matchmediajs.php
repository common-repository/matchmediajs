<?
/*
Plugin Name: MatchMedia.js
Plugin URI: http://www.ramoonus.nl/wordpress/matchmedia/
Description: A JQuery plugin to create google maps with advanced features (overlays, clusters, callbacks, events...)
Version: 1.0.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/

function rw_matchmedia_init() {
		wp_deregister_script('matchmedia');
		wp_enqueue_script('matchmedia', plugins_url('/js/matchmedia.js',__FILE__), false, '1.0.1');
}    
add_action('wp_enqueue_scripts', 'rw_matchmedia_init');