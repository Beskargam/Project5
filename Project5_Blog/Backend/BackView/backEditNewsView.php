<?php
$title = htmlspecialchars('Editer une News');

ob_start(); ?>
    <section class="editNews">
        <p><a href="backIndex.php?action=newsList">Retour à la liste des News</a></p>
        <?php
        echo 'News écrite par ' . htmlspecialchars($editNewsForm->pseudo_user()) . ' le ' . htmlspecialchars($editNewsForm->dateAdd_news()->format('d-m-Y H:i')) . ' : ';
        echo '<form action="backIndex.php?action=news&amp;id=' . htmlspecialchars($editNewsForm->id_news()) . '" method="post">
            <label for="editPseudo_news">Pourquoi voudriez-vous changer l\'auteur ? Cela n\'aucun sens... : </label> <input name="editPseudo_news"
                                                                         id="editPseudo_news" 
                                                                         value="' . htmlspecialchars($editNewsForm->pseudo_user()) . '" required>
            <label for="editTitle_news">Titre de la News : </label> <input name="editTitle_news"
                                                                         id="editTitle_news" 
                                                                         value="' . htmlspecialchars($editNewsForm->title()) . '" required>
            <label for="editContent_news">Contenu de la News : </label> <textarea name="editContent_news"
                                                                         id="editContent_news" required>' . $editNewsForm->content_news() . '</textarea>
            <input type="submit" name="editNews" value="Envoyer">
        </form>';
        echo '<a href="backIndex.php?action=news&amp;id=' . htmlspecialchars($editNewsForm->id_news()) . '">Revenir à la News</a>';
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