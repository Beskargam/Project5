<?php
$title = htmlspecialchars($news->title());
?>

<?php ob_start(); ?>
    <section class="news">
        <p><a href="index.php?action=home">Retour à la liste des News</a></p>
        <h3><?php echo htmlspecialchars($news->title()) ?></h3>

        <p><?php
            echo nl2br(htmlspecialchars($news->content_news()))
            ?></p><?php
        ?><h4>Ecrit par :<br><?php
            echo htmlspecialchars($news->rank_user()) ?><br><?php
            echo htmlspecialchars($news->pseudo_user()) ?><br>
            Le <em><?php echo htmlspecialchars($news->dateAdd_news()->format('d-m-Y H:i')) ?></em>
            <?php
            if ($news->dateAdd_news() != $news->dateEdit_news()) {
                ?> - Modifié le
                <em><?php echo htmlspecialchars($news->dateEdit_news()->format('d-m-Y H:i')) ?></em><?php
            } ?></h4>
    </section>
    <section class="comments">
        <?php
        foreach ($commentsList as $comment) { ?>
            <hr>
            <h4> <?php
                echo htmlspecialchars($comment->rank_user()) ?><br><?php
                echo htmlspecialchars($comment->pseudo()) ?><br>
            </h4>
            <p><?php
                echo nl2br(htmlspecialchars($comment->content_comment()))
                ?></p>
            <h4>Posté le <em><?php echo htmlspecialchars($comment->dateAdd_comment()->format('d-m-Y H:i')) ?></em>
            <?php
            if ($comment->dateAdd_comment() != $comment->dateEdit_comment()) {
                ?> - Modifié le
                <em><?php echo htmlspecialchars($comment->dateEdit_comment()->format('d-m-Y H:i')) ?></em><?php
            } ?>
            </h4>
            <hr><?php
        } ?>
    </section>
<?php
if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['rank'])) {
    echo '<section class="addComment">
        <form action="index.php?action=news&amp;id=' . htmlspecialchars($news->id_news()) . '" method="post">
            <label for="addCommentary">Commentaire : </label> <textarea name="addCommentary"
                                                                      id="addCommentary" required></textarea>
            <input type="submit" value="Envoyer">
        </form>
    </section>';
}
else {
    echo 'Si vous souhaitez réagir à cette news, il faut vous inscrire ou vous connecter';
}
?>
<?php $content = ob_get_clean();

//require('View\Layout\layout.php');
if (empty($pageLayout)) {
    $pageLayout = 'layout';
    $pageLayout = trim($pageLayout . '.php');
}
$pageLayout = str_replace('../', 'protect', $pageLayout);
$pageLayout = str_replace('..\\', 'protect', $pageLayout);
$pageLayout = str_replace(';', 'protect', $pageLayout);
$pageLayout = str_replace('%', 'protect', $pageLayout);
if (preg_match('/admin/', $pageLayout)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageLayout = 'View/Layout/' . $pageLayout;
    if (file_exists($pageLayout) && $pageLayout != 'index.php') {
        require($pageLayout);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}
