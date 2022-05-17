<?php 
// Include
require get_template_directory() . '/include/setup.php';
require get_template_directory() . '/include/customizer/theme-customizer.php';

// Hooks
add_action("wp_enqueue_scripts", "gm_theme_styles");
add_action("after_setup_theme", "gm_after_setup");
add_action("widgets_init", "gm_widgets");
add_action("customize_register", "gm_customize_register");
