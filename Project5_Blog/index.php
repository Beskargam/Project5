<?php

//require('Controller/frontController.php');
if (empty($pageController)) {
    $pageController = 'frontController';
    $pageController = trim($pageController . '.php');
}
$pageController = str_replace('../', 'protect', $pageController);
$pageController = str_replace(';', 'protect', $pageController);
$pageController = str_replace('%', 'protect', $pageController);
if (preg_match('/admin/', $pageController)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageController = "Controller/" . $pageController;
    if (file_exists($pageController) AND $pageController != 'index.php') {
        require($pageController);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

try {
    $loader = new SplClassLoader('Library', '/Model');
    $loader->register();

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            home();
        } elseif ($_GET['action'] == 'news') {
            if (isset($_GET['id']) AND $_GET['id'] > 0) {
                if (isset($_POST['addCommentary'])) {
                    addComment();
                }
                news();
            } else {
                throw new Exception('Erreur : L\'identifiant du saut quantum n\'a pas été envoyé');
            }
        } elseif ($_GET['action'] == 'inscription') {
            if (isset($_POST['pseudoInscription']) AND isset($_POST['passwordInscription'])) {
                addUser();
                home();
            } else {
                inscription();
            }
        } elseif ($_GET['action'] == 'contact') {
            if (isset($_POST['emailContact']) AND isset($_POST['subjectContact']) AND isset($_POST['messageContact'])) {
                sendMessage();
                home();
            }
            else {
                contact();
            }
        } else {
            throw new Exception('Erreur : L\'URL a détecté une anomalie interne');
        }
    } else {
        if (isset($_POST['pseudo']) AND isset($_POST['password'])) {
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
        if (file_exists($pageErrorView) AND $pageErrorView != 'index.php') {
            require($pageErrorView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}
