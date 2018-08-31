<?php
$loader = new SplClassLoader('Library', '/Model');
$loader->register();


$title = 'Mon blog';
?>

<?php ob_start(); ?>
    <h1>Mon Site</h1>
    <p>Dernières News :</p>

    <div class="news">

        <?php
        foreach ($newsList as $news) {
            ?>
            <h3><?php echo '<a href="index.php?action=news&amp;id=' . $news->id_news() . '">' . $news->title() . '</a>'; ?></h3>

            <em>le <?php echo $news->dateAdd_news()->format('d-m-Y H:i') ?></em>
            <p><?php
            echo nl2br($news->content_news())
            ?></p><?php
            ?><h4>Ecrit par :<br><?php
            echo $news->rank_user() ?><br><?php
            echo $news->author_user()
            ?></h4><?php
        }
        ?>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('..\View\Layout\layout.php'); ?>