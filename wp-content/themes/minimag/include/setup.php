<?php 
function gm_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css', get_template_directory_uri() . '/assets/css/template.css');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], true, true);
    wp_enqueue_script('script_js', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], true, true);
}

function gm_after_setup() {
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-formats", ["audio", "video"]);

    register_nav_menu("primary", "Menu Primário");
    register_nav_menu("top", "Menu Superior");
}

function gm_widgets() {
    register_sidebar([
        'name' => 'Sidebar Lateral',
        'id' => 'gm_sidebar',
        'description' => 'Sidebar Lateral',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ]);

    register_sidebar([
        'name' => 'Sidebar Rodapé',
        'id' => 'gm_sidebar_rodape',
        'description' => 'Sidebar Rodapé',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ]);
}