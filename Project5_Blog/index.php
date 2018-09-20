<?php

//require('Controller/Frontend/frontend.php');
if (empty($pageController)) {
    $pageController = 'frontend';
    $pageController = trim($pageController . '.php');
}
$pageController = str_replace('../', 'protect', $pageController);
$pageController = str_replace(';', 'protect', $pageController);
$pageController = str_replace('%', 'protect', $pageController);
if (preg_match('/admin/', $pageController)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageController = "Controller/Frontend/" . $pageController;
    if (file_exists($pageController) && $pageController != 'index.php') {
        require($pageController);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            if (isset($_POST['pseudo']) && isset($_POST['password'])) {
                connexion();
            }
            home();
        } elseif ($_GET['action'] == 'news') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (isset($_POST['pseudo']) && isset($_POST['password'])) {
                    connexion();
                }
                news();
            } else {
                throw new Exception('Erreur : L\'identifiant du saut quantum n\'a pas été envoyé');
            }
        } elseif ($_GET['action'] == 'inscription') {
            if (isset($_POST['pseudoInscription']) && isset($_POST['passwordInscription'])) {
                addUser();
                inscription();
            }
            else
            {
                if (isset($_POST['pseudo']) && isset($_POST['password'])) {
                    connexion();
                }
                inscription();
            }
        } else {
            throw new Exception('Erreur : L\'URL a détecté une anomalie interne');
        }
    } else {
        if (isset($_POST['pseudo']) && isset($_POST['password'])) {
            connexion();
        }
        home();
    }

} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    //require('Error\errorView.php');
    if (empty($pageErrorView)) {
        $pageErrorView = 'errorView';
        $pageErrorView = trim($pageErrorView . '.php');
    }
    $pageErrorView = str_replace('../', 'protect', $pageErrorView);
    $pageErrorView = str_replace(';', 'protect', $pageErrorView);
    $pageErrorView = str_replace('%', 'protect', $pageErrorView);
    if (preg_match('/admin/', $pageErrorView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageErrorView = "Error/" . $pageErrorView;
        if (file_exists($pageErrorView) && $pageErrorView != 'index.php') {
            require($pageErrorView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}
