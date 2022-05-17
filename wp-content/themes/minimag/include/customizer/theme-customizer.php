<?php 
require get_template_directory() . '/include/customizer/social.php';
require get_template_directory() . '/include/customizer/layout.php';


function gm_customize_register($wp_customize) {
    $wp_customize->get_section("title_tagline")->title = "Informações do Site Alterado";
    $wp_customize->get_section("title_tagline")->description = "Informações do Site Alterado";
    $wp_customize->get_section("custom_css")->description = "Altere o CSS a vontade";
    $wp_customize->add_panel("gm_opcoes", [
        "title" => "Opções do Tema",
        "priority" => 1
    ]);
    gm_social_customizer($wp_customize);
    gm_layout_customizer($wp_customize);
}