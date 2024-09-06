<!--
    Datei:          page.php
    Beschreibung:   Vorlage für statische Seiten
-->

<?php get_header(); ?>

<div class="content">
    <main>
    
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                the_title("<h1>", "</h1>");
                the_content();
            endwhile;
        else:
            echo "<p>Seite nicht gefunden.</p>";
        endif; ?>

    </main>
    <aside>
        <!-- TODO: Richtige Platzierung der Sidebar -->
        <?php if (is_active_sidebar("main-sidebar")): ?>
            <aside>
                <?php dynamic_sidebar("main-sidebar"); ?>
            </aside>
        <?php endif; ?>
    </aside>
</div>


<?php get_footer(); ?>
