<?php
/**
 * Footer Template
 * Author: Dein Name
 * Created: 2024-08-24
 *
 * Dieses Template zeigt den Fußbereich der Seite an.
 */
?>

<footer class="theme-footer">

    <div class="footer-container">

        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo("name"); ?></p>
        
        <nav>
            <?php wp_nav_menu([
                "theme_location" => "footer",
                "container" => "ul",
                "menu_class" => "navigation",
            ]); ?>
        </nav>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
