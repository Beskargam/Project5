<?php
//require('controller.php');
if (empty($pageController)){
    $pageController = 'controller';
    $pageController = trim($pageController.'.php');
}
$pageController = str_replace('../', 'protect', $pageController);
$pageController = str_replace(';', 'protect', $pageController);
$pageController = str_replace('%', 'protect', $pageController);
if (preg_match('/admin/', $pageController)){
    echo 'Vous n\'avez pas accès à ce répertoire';
}
else{
    if (file_exists($pageController) && $pageController != 'index.php'){
        require($pageController);
    }
    else{
        echo 'Page inexistante !';
    }
}

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            home();
        } elseif ($_GET['action'] == 'news') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                news();
            } else {
                throw new Exception('Erreur : L\'identifiant du saut quantum n\'a pas été envoyé');
            }
        } else {
            throw new Exception('Erreur : L\'URL a détecté une anomalie interne');
        }
    } else {
        home();
    }
}
catch(Exception $e) {
    $errorMessage = $e->getMessage();

    //require('..\Error\errorView.php');
    if (empty($pageErrorView)){
        $pageErrorView = 'errorView';
        $pageErrorView = trim($pageErrorView.'.php');
    }
    $pageErrorView = str_replace('../', 'protect', $pageErrorView);
    $pageErrorView = str_replace(';', 'protect', $pageErrorView);
    $pageErrorView = str_replace('%', 'protect', $pageErrorView);
    if (preg_match('/admin/', $pageErrorView)){
        echo 'Vous n\'avez pas accès à ce répertoire';
    }
    else{
        $pageErrorView = "../Error/".$pageErrorView;
        if (file_exists($pageErrorView) && $pageErrorView != 'index.php'){
            require($pageErrorView);
        }
        else{
            echo 'Page inexistante !';
        }
    }
}
