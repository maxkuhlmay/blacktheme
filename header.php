<?php
/**
 * Header Template
 * Author: Maximilian Kuhlmay
 * Created: 2024-08-24
 *
 * Dieses Template zeigt den Kopfbereich der Seite an,
 * einschließlich der Navigationsmenüs und des Logos.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <title><?php wp_title("|", true, "right"); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Customize Farben setzen -->
    <style type="text/css">
        body {
            background-color: <?php echo esc_attr(
                get_theme_mod("theme_primary_color")
            ); ?>;
            color: <?php echo esc_attr(
                get_theme_mod("theme_foreground_color")
            ); ?>;
        }
    </style>
    <header>
        <?php if (get_theme_mod("theme_logo")): ?>
        <div class="site-logo">
            <img src="<?php echo esc_url(
                get_theme_mod("theme_logo")
            ); ?>" alt="<?php bloginfo("name"); ?>">
        </div>
        <?php else: ?>
            <!-- TODO: Blog-Info anzeigen und im Bild auch -->
        <?php endif; ?>

        <h1><?php bloginfo("name"); ?></h1>
        <nav aria-label="Hauptnavigation">
            <?php wp_nav_menu([
                "theme_location" => "primary",
                "container" => "ul",
                "menu_class" => "navigation",
            ]); ?>
        </nav>
        <!--  Suche -->
        <?php get_search_form(); ?>
    </header>
