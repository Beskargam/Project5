<?php

//require('backController/backController.php');
if (empty($pageController)) {
    $pageController = 'backController';
    $pageController = trim($pageController . '.php');
}
$pageController = str_replace('../', 'protect', $pageController);
$pageController = str_replace(';', 'protect', $pageController);
$pageController = str_replace('%', 'protect', $pageController);
if (preg_match('/admin/', $pageController)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageController = "backController/" . $pageController;
    if (file_exists($pageController) && $pageController != 'backIndex.php') {
        require($pageController);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

try {
    $loader = new backSplClassLoader('Library', '/BackModel');
    $loader->register();

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            home();
        } elseif ($_GET['action'] == 'newsList') {
            if (isset($_POST['deleteNews']) AND isset($_POST['id'])) {
                deleteNews();
            }
            newsList();
        } elseif ($_GET['action'] == 'commentsValidationList') {
            if (isset($_POST['validateComment']) AND isset($_POST['id'])) {
                validateComment();
            }
            commentsValidationList();
        } elseif ($_GET['action'] == 'usersList') {
            usersList();
        } elseif ($_GET['action'] == 'addNews') {
            if (isset($_POST['addNews']) AND isset($_POST['addTitle_News']) AND isset($_POST['addIntro_News']) AND isset($_POST['addContent_News'])) {
                addNews();
                newsList();
            } else {
                addNewsForm();
            }
        } elseif ($_GET['action'] == 'editNews') {
            if (isset($_GET['id']) AND $_GET['id'] > 0) {
                editNewsForm();
            } else {
                throw new Exception('Erreur : L\'identifiant du saut quantum n\'a pas été envoyé');
            }
        } elseif ($_GET['action'] == 'news') {
            if (isset($_GET['id']) AND $_GET['id'] > 0) {
                if (isset($_POST['deleteComment']) AND isset($_POST['id'])) {
                    deleteComment();
                } elseif (isset($_POST['idComment']) AND $_POST['idComment'] > 0 AND isset($_POST['editCommentary'])) {
                    editComment();
                } elseif (isset($_POST['editContent_news']) AND isset($_POST['editTitle_news']) AND isset($_POST['editIntro'])) {
                    editNews();
                }
                news();
            } else {
                throw new Exception('Erreur : L\'identifiant du saut quantum n\'a pas été envoyé');
            }
        } elseif ($_GET['action'] == 'editComment') {
            if (isset($_GET['id']) AND $_GET['id'] > 0) {
                editCommentForm();
            } else {
                throw new Exception('Erreur : L\'identifiant du saut quantum n\'a pas été envoyé');
            }
        } else {
            throw new Exception('Erreur : L\'URL a détecté une anomalie interne');
        }
    } else {
        home();
    }

} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    //require('backError\backErrorView.php');
    if (empty($pageErrorView)) {
        $pageErrorView = 'backErrorView';
        $pageErrorView = trim($pageErrorView . '.php');
    }
    $pageErrorView = str_replace('../', 'protect', $pageErrorView);
    $pageErrorView = str_replace(';', 'protect', $pageErrorView);
    $pageErrorView = str_replace('%', 'protect', $pageErrorView);
    if (preg_match('/admin/', $pageErrorView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageErrorView = "backError/" . $pageErrorView;
        if (file_exists($pageErrorView) && $pageErrorView != 'backIndex.php') {
            require($pageErrorView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}
