<?php
$title = htmlspecialchars('Liste des News');

ob_start(); ?>
    <section class="newsList">
        <p><a href="backIndex.php?action=addNews">Ajouter une News</a></p>
        <p>Liste des News :</p>

        <?php
        foreach ($newsList as $news) { ?>
            <p><?php echo '<a href="backIndex.php?action=news&amp;id=' . htmlspecialchars($news->id_news()) . '">' . $news->title() . '</a>'; ?>
                Ecrit par : <?php
                echo htmlspecialchars($news->rank_user()) . ' ';
                echo htmlspecialchars($news->pseudo_user()) . ' - ' ?>
                Le <em><?php echo htmlspecialchars($news->dateAdd_news()->format('d-m-Y H:i')) ?></em>
                <?php
                if ($news->dateAdd_news() != $news->dateEdit_news()) {
                    ?> - Modifié le
                    <em><?php echo htmlspecialchars($news->dateEdit_news()->format('d-m-Y H:i')) ?></em><?php
                }
                echo '<form action="backIndex.php?action=newsList" method="POST">
            <input type="hidden" name="id" value="' . htmlspecialchars($news->id_news()) . '">
            <button type="submit" name="deleteNews" value="delete">Supprimer</button>
            </form>';
                echo ' <a href="backIndex.php?action=editNews&amp;id=' . htmlspecialchars($news->id_news()) . '">Editer</a>';
                ?>
            </p> <?php
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