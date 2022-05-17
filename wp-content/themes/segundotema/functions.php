<?php
// Includ4e
require get_template_directory() . '/include/setup.php';

// Hook
add_action("wp_enqueue_scripts", "gs_theme_styles");
add_action("after_setup_theme", "gs_after_setup");
