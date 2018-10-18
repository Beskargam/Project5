<?php
$title = htmlspecialchars('Liste des Membres');

ob_start(); ?>
    <section class="usersList">
        <div class="container">
            <div class="row title-home">
                <div class="col-sm-12 title-home-text">
                    MEMBRES /
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

                            <h4 class="card-inscription-subtitle">TYPE / <span class="type-group">EQUIPAGE /</span>
                            </h4>
                            <h3 class="card-inscription-title">Liste des Membres</h3>
                            <p class="card-inscription-text">
                            <table class="table table-striped table-dark">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Rang</th>
                                    <th scope="col">Nom</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($usersList as $users) { ?>
                                    <tr>
                                        <td class=""><?php echo htmlspecialchars($users->rank()) . ' '; ?></td>
                                        <td class=""><?php echo htmlspecialchars($users->pseudo()); ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
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
