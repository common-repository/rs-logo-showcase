<?php
/*
Plugin Name: RS Logo Showcase
Plugin URI: https://wordpress.org/plugins/rs-logo-showcase/
Description: Fully Responsive and Mobile Friendly Logo Showcase  plugin for partner, clients, brands and more  with Grid, Slider and Isotope View.
Version: 1.2.2
Author: RSTheme
Author URI: https://rstheme.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Requires at least: 5.5
Requires PHP: 7.0.0
Text Domain: rst-logo
Domain Path: /languages/
*/

/**
langugaes file added
*/
function rstlogo_load_textdomain(){
	load_plugin_textdomain('rst-logo', false, dirname(__FILE__)."/languages");
}
add_action('plugins_loaded', 'rstlogo_load_textdomain');

function rstlogo_add_action_links( $links ) {
    $mylinks = array(
        '<a href="http://rstheme.com/plugins/logoshowcase/" target="_blank">' . __( 'Demo', 'rst-logo' ) . '</a>',
        '<a href="http://rstheme.com/rs-logo-showcase-doccumentation/" target="_blank">' . __( 'Documentation', 'rst-logo' ) . '</a>',
        '<a class="rst-upgrade-pro" href="http://rstheme.com/portfolio/rs-logo-showcase-pro-wordpress-plugin/" target="_blank">' . __( 'Upgrade to Pro', 'rst-logo' ) . '</a>',
    );
    return array_merge( $links, $mylinks );
}

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'rstlogo_add_action_links' );

//Adding Necessary Files
$dir = plugin_dir_path( __FILE__ );
include_once ABSPATH . 'wp-admin/includes/plugin.php'; // Include the plugin.php file

if (!is_plugin_active('rs-logo-showcase-pro/rst-logo-showcase.php')) {
    require('includes/init.php');
}
