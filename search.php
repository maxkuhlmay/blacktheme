<?php
/**
 * Search Results Template
 * Author: Dein Name
 * Created: 2024-08-24
 *
 * Dieses Template zeigt Suchergebnisse an.
 */

get_header(); ?>

<div class="content">

<main>

<h1>Suchergebnisse für: <?php echo get_search_query(); ?></h1>

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
    <p>Keine Ergebnisse gefunden.</p>
<?php endif; ?>

</main>
</div>

<?php get_footer(); ?>
