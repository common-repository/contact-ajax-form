<?php
/*
Plugin Name: Contact AJAX Form
Plugin URI:
Description: Use this plugin to be easily able to add a AJAX Contact forms to pages, posts and widget areas
Author: Iflair
Version: 1.0.0
Author URI:
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

load_plugin_textdomain( 'iwacontact', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

/**
 * Include our slightly custom WPSet library
 **/
include_once(  plugin_dir_path( __FILE__ )  . 'wpset/wpset.inc.php');

/**
 * Include our custom settings
 **/
include_once(  plugin_dir_path( __FILE__ )  . '/ajax-settings.php');


/**
 * Include some other mixed functions
 **/

include_once(  plugin_dir_path( __FILE__ )  . '/functions.php');
/**
 * Include the code for the admin UI
 **/
include_once(  plugin_dir_path( __FILE__ )  . '/form-admin.php');

/**
 * Include the code for the form display and submission processing
 **/
include_once(  plugin_dir_path( __FILE__ )  . '/form-display.php');

/**
 * Include the code for our widget
 **/
include_once(  plugin_dir_path( __FILE__ )  . '/form-widget.php');