<?php
/**
 * Single Post Template
 * Author: Dein Name
 * Created: 2024-08-24
 *
 * Dieses Template zeigt einen einzelnen Beitrag an.
 */
?>

<?php get_header(); ?>
<div class="content">
    <main>
<?php if (have_posts()):
    while (have_posts()):
        the_post();
        get_template_part("template-parts/content", "post");
    endwhile;
else:
    echo "<p>Beitrag nicht gefunden.</p>";
endif; ?>
</main>
</div>
<?php get_footer(); ?>
