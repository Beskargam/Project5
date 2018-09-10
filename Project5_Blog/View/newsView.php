<?php
$title = htmlspecialchars($news->title());
?>

<?php ob_start(); ?>
    <h1>Mon Site</h1>
    <p><a href="index.php?action=home">Retour à la liste des billets</a></p>

    <div class="news">

        <h3><?php echo htmlspecialchars($news->title()) ?></h3>

        <p><?php
            echo nl2br(htmlspecialchars($news->content_news()))
            ?></p><?php
        ?><h4>Ecrit par :<br><?php
            echo htmlspecialchars($news->rank_user()) ?><br><?php
            echo htmlspecialchars($news->author_user()) ?><br>
            Le <em><?php echo htmlspecialchars($news->dateAdd_news()->format('d-m-Y H:i')) ?></em>
            <?php
            if ($news->dateAdd_news() != $news->dateEdit_news()) {
                ?> - Modifié le <em><?php echo htmlspecialchars($news->dateEdit_news()->format('d-m-Y H:i')) ?></em><?php
            } ?></h4>

    </div>
<?php $content = ob_get_clean();

//require('..\View\Layout\layout.php');
if (empty($pageLayout)) {
    $pageLayout = 'layout';
    $pageLayout = trim($pageLayout . '.php');
}
$pageLayout = str_replace('../', 'protect', $pageLayout);
$pageLayout = str_replace('..\\', 'protect', $pageLayout);
$pageLayout = str_replace(';', 'protect', $pageLayout);
$pageLayout = str_replace('%', 'protect', $pageLayout);
if (preg_match('/admin/', $pageLayout)) {
    echo 'Vous n\'avez pas accès à ce répertoire';
}
else{
    $pageLayout = '../View/Layout/'.$pageLayout;
    if (file_exists($pageLayout) && $pageLayout != 'index.php') {
        require($pageLayout);
    }
    else {
        echo 'Page inexistante !';
    }
}
