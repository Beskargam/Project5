<?php
$title = $news->title();
?>

<?php ob_start(); ?>
    <h1>Mon Site</h1>
    <p><a href="index.php?action=home">Retour à la liste des billets</a></p>

    <div class="news">

        <h3><?php echo $news->title() ?></h3>

        <p><?php
            echo nl2br($news->content_news())
            ?></p><?php
        ?><h4>Ecrit par :<br><?php
            echo $news->rank_user() ?><br><?php
            echo $news->author_user() ?><br>
            Le <em><?php echo $news->dateAdd_news()->format('d-m-Y H:i') ?></em>
            <?php
            if ($news->dateAdd_news() != $news->dateEdit_news()) {
                ?> - Modifié le <em><?php echo $news->dateEdit_news()->format('d-m-Y H:i') ?></em><?php
            } ?></h4>

    </div>
<?php $content = ob_get_clean(); ?>

<?php require('..\View\Layout\layout.php'); ?>
