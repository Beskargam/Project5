<?php
if (!isset($_SESSION)) {
    session_start();
}
$title = htmlspecialchars('Ajouter une News');

ob_start(); ?>
    <section>
        <div class="container">
            <div class="row title-home">
                <div class="col-sm-8 col-md-6 col-lg-5 title-home-text">
                    AJOUTER UN COMM-LINK /
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
                            <h3 class="card-inscription-title">Remplissez les champs pour écrire le COMM-LINK</h3>
                            <p class="card-inscription-text">
                            <form method="post">
                                <label class="form-label card-inscription-text" for="addTitle_News">Titre du COMM-LINK
                                    : </label> <input class="form-control" name="addTitle_News"
                                                      id="addTitle_News" required>
                                <label class="form-label card-inscription-text" for="addIntro_News">Introdution du
                                    COMM-LINK
                                    : </label> <textarea class="form-control" name="addIntro_News"
                                                         id="addIntro_News"
                                                         required></textarea>
                                <label class="form-label card-inscription-text" for="addContent_News">Contenu du
                                    COMM-LINK
                                    : </label> <textarea class="form-control" name="addContent_News"
                                                         id="addContent_News"
                                                         required></textarea>
                                <button class="btn btn-primary" type="submit" name="addNews" value="Envoyer">
                                    Terminé
                                </button>
                            </form>
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
    $pageBackLayout = 'backView/backLayout/' . $pageBackLayout;
    if (file_exists($pageBackLayout) && $pageBackLayout != 'backIndex.php') {
        require($pageBackLayout);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}
