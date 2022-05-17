<?php
function gm_social_customizer($wp_customize)
{
    // Settings
    $wp_customize->add_setting("gm_facebook", ["default" => ""]);
    $wp_customize->add_setting("gm_googleplus", ["default" => ""]);
    $wp_customize->add_setting("gm_instagram", ["default" => ""]);
    $wp_customize->add_setting("gm_twitter", ["default" => ""]);
    $wp_customize->add_setting("gm_youtube", ["default" => ""]);

    // Sections
    $wp_customize->add_section("gm_social_section", [
        "title" => "Redes Sociais",
        "priority" => "1",
        "panel" => "gm_opcoes"
    ]);

    // Controllers
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "gm_facebook",
            [
                "label" => "Facebook",
                "section" => "gm_social_section",
                "settings" => "gm_facebook",
                "type" => "text"
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "gm_googleplus",
            [
                "label" => "Google Plus",
                "section" => "gm_social_section",
                "settings" => "gm_googleplus",
                "type" => "text"
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "gm_instagram",
            [
                "label" => "Instagram",
                "section" => "gm_social_section",
                "settings" => "gm_instagram",
                "type" => "text"
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "gm_twitter",
            [
                "label" => "Twitter",
                "section" => "gm_social_section",
                "settings" => "gm_twitter",
                "type" => "text"
            ]
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            "gm_youtube",
            [
                "label" => "Youtube",
                "section" => "gm_social_section",
                "settings" => "gm_youtube",
                "type" => "text"
            ]
        )
    );
}
