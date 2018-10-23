<?php
$title = htmlspecialchars('Editer un commentaire');
?>

<?php ob_start(); ?>
    <section class="editComment">
        <div class="container">
            <div class="row title-home">
                <div class="col-sm-8 col-md-6 col-lg-5 title-home-text">
                    EDITER UN COMM-LINK /
                </div>
                <div class="col-sm col-md col-lg-5">

                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 title-home-btn">
                    <a href="backIndex.php?action=newsList">Liste des News</a>
                </div>
            </div>
            <div class="container flipboard-boxes flipboard-latest-news">
                <div class="row">
                    <div class="col-lg-12 card-inscription">
                        <div class="card-inscription-body">

                            <div id="upper_left-corner"></div>
                            <div id="upper_right-corner"></div>
                            <div id="lower_left-corner"></div>
                            <div id="lower_right-corner"></div>

                            <h4 class="card-inscription-subtitle">TYPE / <span class="type-group">ECRITURE /</span>
                            </h4>
                            <h3 class="card-inscription-title">Remplissez les champs pour Editer le Commentaire</h3>
                            <p class="card-inscription-text">
                                <?php
                                echo 'Commentaire écrit par ' . htmlspecialchars($editCommentForm->pseudo()) . ' le ' . htmlspecialchars($editCommentForm->dateAdd_comment()->format('d F, Y H:i')) . '';
                                echo '<form action="backIndex.php?action=news&amp;id=' . htmlspecialchars($editCommentForm->id_news()) . '" method="POST">
            <input type="hidden" name="idComment" value="' . htmlspecialchars($editCommentForm->id_comment()) . '"> 
            <label class="form-label card-inscription-text" for="editCommentary">Commentaire : </label> <textarea class="form-control" name="editCommentary"
                                                                      id="editCommentary" required>' . $editCommentForm->content_comment() . '</textarea>
            <button class="btn btn-primary" type="submit" value="Envoyer">Editer</button>
        <a href="backIndex.php?action=news&amp;id=' . htmlspecialchars($editCommentForm->id_news()) . '">Revenir à la News</a>
        </form>';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    $pageBackLayout = 'BackView/backLayout/' . $pageBackLayout;
    if (file_exists($pageBackLayout) && $pageBackLayout != 'backIndex.php') {
        require($pageBackLayout);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}
