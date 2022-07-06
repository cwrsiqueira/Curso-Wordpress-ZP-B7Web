<?php 
function gm_theme_styles() {
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css', get_template_directory_uri() . '/assets/css/template.css', ['bootstrap_css']);
    wp_enqueue_style('print_css', get_template_directory_uri() . '/assets/css/print.css', ['template_css'], false, 'print');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], true, true);
    wp_enqueue_script('script_js', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], true, true);
}

function gm_after_setup() {
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-formats", ["audio", "video"]);

    add_theme_support('custom-header', [
        'default-image' => get_template_directory_uri() . '/assets/images/headers/header1.jpg',
        'width' => 1280,
        'height' => 400,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => true,
        'uploads' => true,
    ]);
    register_default_headers([
        'header1' => [
            'url' => get_template_directory_uri() . '/assets/images/headers/header1.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/header1.jpg',
            'description' => 'Header 1',
        ],
        'header2' => [
            'url' => get_template_directory_uri() . '/assets/images/headers/header2.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/header2.jpg',
            'description' => 'Header 2',
        ],
        'header3' => [
            'url' => get_template_directory_uri() . '/assets/images/headers/header3.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/headers/header3.jpg',
            'description' => 'Header 3',
        ],
    ]);

    register_nav_menu("primary", "Menu Primário");
    register_nav_menu("top", "Menu Superior");

    load_theme_textdomain('minimag', get_template_directory() . '/languages');
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