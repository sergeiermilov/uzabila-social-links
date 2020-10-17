<?php
/**
 * Plugin Name:       Uzabila Social Links
 * Plugin URI:        https://uzabila.com/plugins/uzabila-social-links/
 * Description:       Uzabila Social Links Widget
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sergei Ermilov
 * Author URI:        https://sergeiermilov.github.io/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       uzabila-social-links
 * Domain Path:       /languages
 */

// exit if accessed directly
if ( !defined('ABSPATH') ){
	exit;
}; 

// load script
require_once(plugin_dir_path( __FILE__ ).'/includes/social-links-scripts.php');
// load Class
require_once(plugin_dir_path( __FILE__ ).'/includes/social-links-class.php');

// Register Widget
function register_uzabila_social_links(){
	register_widget( 'Social_Links_Widget' );
}
add_action( 'widgets_init', 'register_uzabila_social_links' );