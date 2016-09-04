<?php

function myMaterial_resources() {
	wp_enque_style('style', get_stylesheet_uri());
}

add_action('wp_enque_scripts', 'myMaterial_resources');

?>