<?php

$title = htmlspecialchars('Erreur');
?>

<?php ob_start(); ?>
    <p><a href="backIndex.php?action=home">Revenir à l'accueil</a></p>
    <h3><?php echo htmlspecialchars('' . $errorMessage) ?></h3>
<?php $content = ob_get_clean();

//require('backView\backFrontend\backHeader.php');
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
    $pageBackHeader = 'backView/' . $pageBackHeader;
    if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
        require($pageBackHeader);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backView\backFrontend\backFooter.php');
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
    $pageBackFooter = 'backView/' . $pageBackFooter;
    if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
        require($pageBackFooter);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

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