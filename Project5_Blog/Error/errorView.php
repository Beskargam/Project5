<?php

$title = htmlspecialchars('Erreur');
?>

<?php ob_start(); ?>
    <p><a href="index.php?action=home">Retour à l\'accueil</a></p>
    <h3><?php echo htmlspecialchars('' . $errorMessage) ?></h3>
<?php $content = ob_get_clean();

//require('View\Frontend\header.php');
if (empty($pageHeader)) {
    $pageHeader = 'header';
    $pageHeader = trim($pageHeader . '.php');
}
$pageHeader = str_replace('../', 'protect', $pageHeader);
$pageHeader = str_replace('..\\', 'protect', $pageHeader);
$pageHeader = str_replace(';', 'protect', $pageHeader);
$pageHeader = str_replace('%', 'protect', $pageHeader);
if (preg_match('/admin/', $pageHeader)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageHeader = 'View/' . $pageHeader;
    if (file_exists($pageHeader) && $pageHeader != 'index.php') {
        require($pageHeader);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

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

//require('View\Layout\layout.php');
if (empty($pageLayout)) {
    $pageLayout = 'layout';
    $pageLayout = trim($pageLayout . '.php');
}
$pageLayout = str_replace('../', 'protect', $pageLayout);
$pageLayout = str_replace('..\\', 'protect', $pageLayout);
$pageLayout = str_replace(';', 'protect', $pageLayout);
$pageLayout = str_replace('%', 'protect', $pageLayout);
if (preg_match('/admin/', $pageLayout)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageLayout = 'View/Layout/' . $pageLayout;
    if (file_exists($pageLayout) && $pageLayout != 'index.php') {
        require($pageLayout);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}
