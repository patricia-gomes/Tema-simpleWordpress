<?php
require get_template_directory().'/include/helper.php';

add_action('wp_enqueue_scripts', 'ps_theme_styles');
add_action('after_setup_theme', 'ps_after_setup_theme');