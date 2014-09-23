<?php

defined('ABSPATH') or die("Play nice!");

// Scripts files to be includeded in the header

function tito_load_files() {
	wp_enqueue_script( 'tito_script', 'https://js.tito.io/v1', array('jquery'), null);
	wp_enqueue_style( 'tito_style','https://css.tito.io/v1', null, null);
}

add_action('wp_enqueue_scripts', 'tito_load_files');

?>