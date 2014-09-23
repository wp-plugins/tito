<?php
/**
 * Plugin Name: Tito
 * Plugin URI: http://wordpress.org/plugins/tito/
 * Description: Probably the best event management software on the web, this plugin enables adding Tito (http://tito.io) event management to your website or blog
 * Version: 0.3
 * Author: Tady Walsh
 * Author URI: http://tady.me
 * License: GPL2
 */


// Security script, prevents unwanted direct script access to ensure no naughtyness! 

defined('ABSPATH') or die("Play nice!");


// Global variables

$tito_plugin_name = "Tito";
$tito_version = "0.1";
$tito_options = get_option('tito_settings');

// Includes

include('inc/scripts.php');
include('inc/display.php');
include('inc/admin.php');

?>