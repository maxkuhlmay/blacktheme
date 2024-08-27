<?php
/**
 * Theme Functions
 * Author: Maximilian Kuhlmay
 * Created: 2024-08-24
 *
 * Diese Datei enthält Funktionen für die Unterstützung von
 * Menüs, Widgets, Theme-Customizer und mehr.
 */

function theme_enqueue_scripts()
{
    // CSS-Dateien einbinden

    wp_enqueue_style("theme-style", get_stylesheet_uri());
    wp_enqueue_style(
        "theme-reset",
        get_template_directory_uri() . "/assets/css/reset.css"
    );

    wp_enqueue_style(
        "theme-normalize",
        get_template_directory_uri() . "/assets/css/normalize.css"
    );

    wp_enqueue_style(
        "theme-custom",
        get_template_directory_uri() . "/assets/css/custom-styles.css"
    );

    // JavaScript-Dateien einbinden
    wp_enqueue_script(
        "theme-script",
        get_template_directory_uri() . "/assets/js/main.js",
        [],
        null,
        true
    );
}

function theme_setup()
{
    // Unterstützung für Menüs hinzufügen
    register_nav_menus([
        "primary" => __("Primary Menu", "theme"),
        "footer" => __("Footer menu", "theme"),
    ]);
}

function theme_customize_register($wp_customize)
{
    // Seitenlogo

    $wp_customize->add_section("theme_logo_section", [
        "title" => __("Logo", "theme"),
        "priority" => 30,
    ]);

    $wp_customize->add_setting("theme_logo");

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, "theme_logo", [
            "label" => __("Logo hochladen", "theme"),
            "section" => "theme_logo_section",
            "settings" => "theme_logo",
        ])
    );

    // Hintergrundfarbe

    $wp_customize->add_section("theme_colors", [
        "title" => __("Farben", "theme"),
        "priority" => 35,
    ]);

    $wp_customize->add_setting("theme_primary_color", [
        "default" => "#ffffff",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, "theme_primary_color", [
            "label" => __("Hintergrundfarbe", "theme"),
            "section" => "theme_colors",
            "settings" => "theme_primary_color",
        ])
    );

    // Text-Farbe
    $wp_customize->add_setting("theme_foreground_color", [
        "default" => "#000000",
    ]);

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            "theme_foreground_color",
            [
                "label" => __("Vordergrundfarbe", "theme"),
                "section" => "theme_colors",
                "settings" => "theme_foreground_color",
            ]
        )
    );
}

function theme_widgets_init()
{
    register_sidebar([
        "name" => __("Haupt-Sidebar", "theme"),
        "id" => "main-sidebar",
        "before_widget" => "<div class='widget'>",
        "after_widget" => "</div>",
        "before_title" => "<h2>",
        "after_title" => "</h2>",
    ]);
}

add_action("wp_enqueue_scripts", "theme_enqueue_scripts");
add_action("after_setup_theme", "theme_setup");
add_action("customize_register", "theme_customize_register");
add_action("widgets_init", "theme_widgets_init");

?>
