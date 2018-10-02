<?php
if(!isset($_SESSION))
{
session_start();
}
$title = htmlspecialchars('Ajouter une News');

ob_start(); ?>
    <section class="newsList">
        <p><a href="backIndex.php?action=newsList">Retour à la liste des News</a></p>
        <?php
        echo 'Vous pouvez écrire votre News '. $_SESSION['rank'] . ' ' . $_SESSION['pseudo'] . ' ';
        ?>
        <form action="backIndex.php?action=addNews" method="post">
            <label for="addTitle_News">Titre de la News : </label> <input name="addTitle_News"
                                                                         id="addTitle_News" required>
            <label for="addContent_News">Contenu de la News : </label> <textarea name="addContent_News"
                                                                         id="addContent_News" required></textarea>
            <input type="submit" name="addNews" value="Envoyer">
        </form>
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