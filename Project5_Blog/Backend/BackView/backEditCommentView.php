<?php
$title = htmlspecialchars('Editer un commentaire');
?>

<?php ob_start(); ?>
    <section class="editComment">
        <?php
        echo 'Commentaire écrit par ' . htmlspecialchars($editCommentForm->pseudo()) . ' le ' . htmlspecialchars($editCommentForm->dateAdd_comment()->format('d-m-Y H:i')) . ' : ';
        echo '<form action="backIndex.php?action=news&amp;id=' . htmlspecialchars($editCommentForm->id_news()) . '" method="POST">
            <input type="hidden" name="idComment" value="' . htmlspecialchars($editCommentForm->id_comment()) . '"> 
            <label for="editCommentary">Commentaire : </label> <textarea name="editCommentary"
                                                                      id="editCommentary" required>' . $editCommentForm->content_comment() . '</textarea>
            <input type="submit" value="Envoyer">
        </form>';
        echo '<a href="backIndex.php?action=news&amp;id=' . htmlspecialchars($editCommentForm->id_news()) . '">Revenir à la News</a>';
        ?>
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