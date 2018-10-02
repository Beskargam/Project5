<?php
$title = htmlspecialchars($news->title());
?>

<?php ob_start(); ?>
    <section class="news">
        <p><a href="backIndex.php?action=newsList">Retour à la liste des News</a></p>
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
            <?php
            echo '<form action="backIndex.php?action=news&amp;id=' . htmlspecialchars($news->id_news()) . '" method="POST">
            <input type="hidden" name="id" value="' . htmlspecialchars($comment->id_comment()) . '">
            <button type="submit" name="deleteComment" value="delete">Supprimer</button>
            </form>';
            echo '<a href="backIndex.php?action=editComment&amp;id=' . htmlspecialchars($comment->id_comment()) . '">Editer</a>';
            ?>
            <hr><?php
        } ?>
    </section>
<?php $content = ob_get_clean();

//require('backView\backLayout\backLayout.php');
if (empty($pageBackLayout)) {
    $pageBackLayout = 'backLayout';
    $pageBackLayout = trim($pageBackLayout . '.php');
}
$pageBackLayout = str_replace('../', 'protect', $pageBackLayout);
$pageBackLayout = str_replace('..\\', 'protect', $pageBackLayout);
$pageBackLayout = str_replace(';', 'protect', $pageBackLayout);
$pageBackLayout = str_replace('%', 'protect', $pageBackLayout);
if (preg_match('/admin/', $pageBackLayout)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackLayout = 'backView/backLayout/' . $pageBackLayout;
    if (file_exists($pageBackLayout) && $pageBackLayout != 'backIndex.php') {
        require($pageBackLayout);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}