<div class="theme--debug">
    <?php if (is_user_logged_in()) {
        global $template;
        echo basename($template);
    } ?>
</div>