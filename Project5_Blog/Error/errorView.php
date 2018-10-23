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

                    <h4 class="card-error-subtitle">TYPE / <span class="type-group">MESSAGE</span></h4>
                    <h3 class="card-error-title"><?php echo htmlspecialchars('' . $errorMessage) ?></h3>
                    <p class="card-error-text">
                        Il est inutile d'appeler un Anvil Crucible Pour ça...
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean();

//require('View\navigation.php');
if (empty($pageNavigation)) {
    $pageNavigation = 'navigation';
    $pageNavigation = trim($pageNavigation . '.php');
}
$pageNavigation = str_replace('../', 'protect', $pageNavigation);
$pageNavigation = str_replace('..\\', 'protect', $pageNavigation);
$pageNavigation = str_replace(';', 'protect', $pageNavigation);
$pageNavigation = str_replace('%', 'protect', $pageNavigation);
if (preg_match('/admin/', $pageNavigation)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageNavigation = 'View/' . $pageNavigation;
    if (file_exists($pageNavigation) && $pageNavigation != 'index.php') {
        require($pageNavigation);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('View\Frontend\footer.php');
if (empty($pageFooter)) {
    $pageFooter = 'footer';
    $pageFooter = trim($pageFooter . '.php');
}
$pageFooter = str_replace('../', 'protect', $pageFooter);
$pageFooter = str_replace('..\\', 'protect', $pageFooter);
$pageFooter = str_replace(';', 'protect', $pageFooter);
$pageFooter = str_replace('%', 'protect', $pageFooter);
if (preg_match('/admin/', $pageFooter)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageFooter = 'View/' . $pageFooter;
    if (file_exists($pageFooter) && $pageFooter != 'index.php') {
        require($pageFooter);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('View\Layout\layoutError.php');
if (empty($pageLayoutError)) {
    $pageLayoutError = 'layoutError';
    $pageLayoutError = trim($pageLayoutError . '.php');
}
$pageLayoutError = str_replace('../', 'protect', $pageLayoutError);
$pageLayoutError = str_replace('..\\', 'protect', $pageLayoutError);
$pageLayoutError = str_replace(';', 'protect', $pageLayoutError);
$pageLayoutError = str_replace('%', 'protect', $pageLayoutError);
if (preg_match('/admin/', $pageLayoutError)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageLayoutError = 'View/Layout/' . $pageLayoutError;
    if (file_exists($pageLayoutError) && $pageLayoutError != 'index.php') {
        require($pageLayoutError);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}
