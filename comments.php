<?php
/**
 * Comments Template
 * Author: Dein Name
 * Created: 2024-08-24
 *
 * Dieses Template zeigt den Kommentarbereich eines Beitrags an.
 */
?>

<?php
if (have_comments()):
    wp_list_comments();
endif;

comment_form();


?>
