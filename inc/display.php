<?php

defined('ABSPATH') or die("Play nice!");

// Display content on page

function tito_init($atts) {

	//Variables

	global $tito_options;

	$event 			= $tito_options['event_path'];
	$button_label	= $tito_options['button_label'];;
	$releases 		= $tito_options['releases'];

	if(isset($tito_options['is_button'])) {
		$button_set = true;
	} else {
		$button_set = false;
	}

	// Attributes
	$atts = shortcode_atts(
		array(
			'event'			=> $event,
			'button' 		=> $button_set,
			'label'			=> $button_label,
			'releases' 		=> $releases
		), $atts);

	// Code

	if($atts['button'] == "true" || $atts['button'] == true){
		$type = "tito-button";
	}else{
		$type = "tito-widget";
	}

	if($atts['releases'] != ""){
		$releases = ' releases="'.$atts['releases'].'"';
	}


	$tito_box = '<'.$type.' event="'.$atts['event'].'"'.$releases.'>'.$atts['label'].'</'.$type.'>';
		 
	return $tito_box;
	
}

function register_shortcodes(){
	add_shortcode('tito', 'tito_init');
}

add_action('init','register_shortcodes');

?>