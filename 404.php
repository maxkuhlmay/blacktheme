<?php

/**
 * 404 Template
 * Author: Dein Name
 * Created: 2024-08-24
 *
 * Dieses Template wird angezeigt, wenn eine Seite nicht gefunden wird.
 */

get_header(); ?>

<div class='content'>
    <main>
        <h1>Seite nicht gefunden</h1>
        <p>Leider konnten wir die gesuchte Seite nicht finden. Vielleicht hilft die Suche?</p>

        <?php get_search_form(); ?>
    </main>
</div>
<?php get_footer(); ?>
