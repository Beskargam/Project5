<?php

$title = 'Erreur';
?>

<?php ob_start(); ?>
    <h3><?php echo ''.$errorMessage ?></h3>
<?php $content = ob_get_clean(); ?>

<?php require('..\View\Layout\layout.php'); ?>