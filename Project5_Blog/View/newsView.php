<?php
$loader = new SplClassLoader('Library', '/Model');
$loader->register();


$title = $news->title();
?>

<?php ob_start(); ?>
    <h1>Mon Site</h1>
    <p><a href="index.php?action=home">Retour à la liste des billets</a></p>

    <div class="news">

        <h3><?php echo $news->title() ?></h3>
        <em>le <?php echo $news->dateAdd_news()->format('d-m-Y H:i') ?></em>

        <p><?php
            echo nl2br($news->content_news())
            ?></p><?php
        ?><h4>Ecrit par :<br><?php
            echo $news->rank_user() ?><br><?php
            echo $news->author_user()
            ?></h4>

    </div>
<?php $content = ob_get_clean(); ?>

<?php require('..\View\Layout\layout.php'); ?>