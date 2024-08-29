<?php

/**
 * Archive Template
 * Author: Dein Name
 * Created: 2024-08-24
 *
 * Dieses Template zeigt Beiträge in einem Archiv (z.B. Kategorie oder Tag) an.
 */

get_header(); ?>

<h1>Archiv: <?php the_archive_title(); ?></h1>

<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_excerpt(); ?></div>
        </article>
    <?php
    endwhile; ?>
<?php else: ?>
    <p>Keine Beiträge im Archiv gefunden.</p>
<?php endif; ?>

<?php get_footer(); ?>
