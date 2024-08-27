<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>

    <!-- TODO: Bessere Platzierung -->
    <?php the_posts_pagination([
        "mid_size" => 2,
        "prev_text" => __("Zurück", "theme"),
        "next_text" => __("Weiter", "theme"),
    ]); ?>

</article>
