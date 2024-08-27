<!--
    Datei:          single.php
    Beschreibung:   Vorlage für einzelne Beiträge
-->

<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post();
        get_template_part("template-parts/content", "post");
    endwhile;
else:
    echo "<p>Beitrag nicht gefunden.</p>";
endif; ?>

<?php get_footer(); ?>
