<?php
function ps_theme_styles() {
	//Add o css 
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/style.css');
}

function ps_after_setup_theme() {
	//Insere no template a tag title
	add_theme_support('title-tag');
	//Insere a logo
	add_theme_support('custom-logo');
}