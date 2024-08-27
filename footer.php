<footer>

    <p>&copy; <?php echo date("Y"); ?> <?php bloginfo("name"); ?></p>

    <nav>
        <?php wp_nav_menu([
            "theme_location" => "footer",
            "container" => "ul",
            "menu_class" => "navigation",
        ]); ?>
    </nav>

</footer>

<?php wp_footer(); ?>

</body>
</html>
