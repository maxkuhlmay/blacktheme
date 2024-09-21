

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

    <!-- Showing debug information for every site -->
    <?php if (is_user_logged_in()) { ?>
        <div class="theme--debug">
            <?php
            global $template;
            echo basename($template);
            ?>
        </div>
    <?php } ?>

    <!-- Customize Farben setzen -->
    <style type="text/css">
        :root {
            --_primary-color: <?php echo esc_attr(get_theme_mod("theme_primary_color")); ?>;
            --_secondary-color: <?php echo esc_attr(get_theme_mod("theme_foreground_color")); ?>;

            --_accent-color: <?php echo esc_attr(get_theme_mod("theme_accent_color")); ?>;

            --_background-color: var(--_primary-color);
            --_color: var(--_secondary-color);
        }
    </style>
    <header class="theme-header">

        <div class="header-container">
            <div class="theme-info__container">
                <?php if (get_theme_mod("theme_logo")): ?>
                <div class="site-logo">
                    <img src="<?php echo esc_url(get_theme_mod("theme_logo")); ?>" alt="<?php bloginfo("name"); ?>">
                </div>
                <?php else: ?>
                    <!-- TODO: Blog-Info anzeigen und im Bild auch -->
                <?php endif; ?>
                <h1><?php bloginfo("name"); ?></h1>
            </div>
            <div class="theme-navigation__container">
                <nav aria-label="theme-navigation">
                    <?php wp_nav_menu([
                        "theme_location" => "primary",
                        "container" => "ul",
                        "menu_class" => "navigation",
                    ]); ?>
                </nav>
                <!--  Suche -->
                <?php get_search_form(); ?>
            </div>

        </div>

    </header>
