<?php
function ps_theme_styles() {
	//Add o css 
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/style.min.css');
}

function ps_after_setup_theme() {
	//Insere no template a tag title
	add_theme_support('title-tag');
	//Insere a logo
	add_theme_support('custom-logo');
	//Insere a imagem do post
	add_theme_support('post-thumbnails');
}
//Add side bar
function ps_widgets() {
	register_sidebar(array(
		'name' => __('Sidebar', 'simple'),
		'id' => 'ps_sidebar',
		'description' => __('Sidebar theme', 'simple'),
		'before_title' => '<h4 class="widget_utimos_posts">',
		'after_title' => '</h4>'
	));
}