<?php

$title = htmlspecialchars('Erreur');
?>

<?php ob_start(); ?>
    <section>
        <div class="container flipboard-boxes flipboard-error">
            <div class="col-lg-12 card-error">
                <div class="card-error-body">

                    <div id="upper_left-corner"></div>
                    <div id="upper_right-corner"></div>
                    <div id="lower_left-corner"></div>
                    <div id="lower_right-corner"></div>

                    <h4 class="card-error-subtitle">TYPE / <span class="post-group">MESSAGE</span></h4>
                    <h3 class="card-error-title"><?php echo htmlspecialchars('' . $errorMessage) ?></h3>
                    <p class="card-error-text">
                        Il est inutile d'appeler un Anvil Crucible Pour ça...
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean();

//require('BackView\backFrontend\backHeader.php');
if (empty($pageBackHeader)) {
    $pageBackHeader = 'backHeader';
    $pageBackHeader = trim($pageBackHeader . '.php');
}
$pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
$pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
$pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
$pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
if (preg_match('/admin/', $pageBackHeader)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackHeader = 'BackView/' . $pageBackHeader;
    if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
        require($pageBackHeader);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('BackView\backFrontend\backFooter.php');
if (empty($pageBackFooter)) {
    $pageBackFooter = 'backFooter';
    $pageBackFooter = trim($pageBackFooter . '.php');
}
$pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
$pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
$pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
$pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
if (preg_match('/admin/', $pageBackFooter)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackFooter = 'BackView/' . $pageBackFooter;
    if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
        require($pageBackFooter);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('BackView\backLayout\backLayout.php');
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
