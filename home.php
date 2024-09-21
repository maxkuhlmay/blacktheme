<!--
    Datei:          home.php
    Beschreibung:   Diese Seite wird für die Blog-Startseite verwendet (oder die Startseite, wenn keine statische Seite definiert ist)
-->
    
<?php get_header(); ?>

<div class="content">

<main>
<?php if (have_posts()):
    while (have_posts()):
        the_post();
        the_title("<h2>", "</h2>");
        the_excerpt(); // Zeigt den Auszug statt den ganzen Inhalt
        echo '<a href="' . get_permalink() . '">Weiterlesen</a>';
    endwhile;
else:
    echo "<p>Keine Beiträge gefunden.</p>";
endif; ?>

<?php the_posts_pagination([
    "mid_size" => 2,
    "prev_text" => __("Zurück", "theme"),
    "next_text" => __("Weiter", "theme"),
]); ?>

</main>

</div>


<?php get_footer(); ?>
