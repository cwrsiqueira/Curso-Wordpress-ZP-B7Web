<?php 
// INCLUDE
require get_template_directory() . '/include/setup.php';

// HOOKS
add_action('wp_enqueue_scripts', 'gp_theme_styles');
add_action('after_setup_theme', 'gp_after_setup');
add_action('widgets_init', 'gp_widgets');