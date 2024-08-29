<?php
/**
 * Main Template File
 * Author: Dein Name
 * Created: 2024-08-24
 *
 * Dies ist die Hauptvorlage des Themes. Sie wird verwendet,
 * wenn keine spezifischere Vorlage existiert.
 */

get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post();
        the_title("<h1>", "</h1>");
        the_content();
    endwhile;
else:
    echo "<p>Keine Beiträge gefunden.</p>";
endif; ?>

<?php get_footer(); ?>
