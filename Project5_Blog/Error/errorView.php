<?php

$title = htmlspecialchars('Erreur');
?>

<?php ob_start(); ?>
    <h3><?php echo htmlspecialchars('' . $errorMessage) ?></h3>
<?php $content = ob_get_clean();

//require('..\View\Layout\layout.php');
if (empty($pageLayout)) {
    $pageLayout = 'layout';
    $pageLayout = trim($pageLayout . '.php');
}
$pageLayout = str_replace('../', 'protect', $pageLayout);
$pageLayout = str_replace('..\\', 'protect', $pageLayout);
$pageLayout = str_replace(';', 'protect', $pageLayout);
$pageLayout = str_replace('%', 'protect', $pageLayout);
if (preg_match('/admin/', $pageLayout)) {
    echo 'Vous n\'avez pas accès à ce répertoire';
}
else{
    $pageLayout = '../View/Layout/'.$pageLayout;
    if (file_exists($pageLayout) && $pageLayout != 'index.php') {
        require($pageLayout);
    }
    else {
        echo 'Page inexistante !';
    }
}
