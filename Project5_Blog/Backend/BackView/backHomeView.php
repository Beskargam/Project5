<?php

$title = htmlspecialchars('Zone d\'Administration');

ob_start(); ?>
    <section class="home">
        <div class="container">
            <div class="col-lg-12 flipboard-boxes flipboard-latest-news">
                <div class="row justify-content-center">
                    <div class="card-latestnews">
                        <div class="card-latestnews-body">

                            <div id="upper_left-corner"></div>
                            <div id="upper_right-corner"></div>
                            <div id="lower_left-corner"></div>
                            <div id="lower_right-corner"></div>

                            <h4 class="card-latestnews-subtitle">TYPE / <span class="type-group">OPTIONS /</span></h4>
                            <h3 class="card-latestnews-title">HOME</h3>
                            <p class="card-latestnews-text">
                            <ul>
                                <li><a href="backIndex.php?action=newsList">Liste des News</a></li>
                                <li><a href="backIndex.php?action=commentsValidationList">Liste des commentaires pour
                                        validation</a>
                                </li>
                                <li><a href="backIndex.php?action=usersList">Liste des Membres</a></li>
                            </ul>
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
