<?php
function gm_layout_customizer($wp_customize)
{
    // Settings
    $wp_customize->add_setting("gm_topmenu", ["default" => "yes"]);
    $wp_customize->add_setting("gm_search", ["default" => "yes"]);
    $wp_customize->add_setting("gm_privacy", ["default" => ""]);

    // Sections
    $wp_customize->add_section("gm_layout_section", [
        "title" => "Opções de Layout",
        "priority" => "2",
        "panel" => "gm_opcoes"
    ]);

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "gm_topmenu",
            [
                "label" => "Mostrar Menu Superior",
                "section" => "gm_layout_section",
                "settings" => "gm_topmenu",
                "type" => "checkbox",
                "choices" => [
                    "yes" => "sim"
                ]
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "gm_search",
            [
                "label" => "Mostrar Busca",
                "section" => "gm_layout_section",
                "settings" => "gm_search",
                "type" => "checkbox",
                "choices" => [
                    "yes" => "sim"
                ]
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "gm_privacy",
            [
                "label" => "Politica de Privacidade",
                "section" => "gm_layout_section",
                "settings" => "gm_privacy",
                "type" => "dropdown-pages"
            ]
        )
    );
}
