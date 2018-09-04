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

            if (strlen($news->content_news()) <= 200) {
                $content_news = $news->content_news();
            } else {
                $start = substr($news->content_news(), 0, 200);
                $start = substr($start, 0, strrpos($start, ' ')) . ' ...';
                $content_news = $start;
            } ?>
            <h3><?php echo '<a href="index.php?action=news&amp;id=' . $news->id_news() . '">' . $news->title() . '</a>'; ?></h3>

            <p><?php
            echo nl2br($content_news)
            ?></p><?php
            ?><h4>Ecrit par :<br><?php
            echo $news->rank_user() ?><br><?php
            echo $news->author_user() ?><br>
            Le <em><?php echo $news->dateAdd_news()->format('d-m-Y H:i') ?></em>
            <?php
            if ($news->dateAdd_news() != $news->dateEdit_news()) {
                ?> - Modifié le <em><?php echo $news->dateEdit_news()->format('d-m-Y H:i') ?></em><?php
            } ?></h4><?php
        } ?>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require('..\View\Layout\layout.php'); ?>
