<?php

//require('Model\NewsManager.php');
if (empty($pageNewsManager)) {
    $pageNewsManager = 'NewsManager';
    $pageNewsManager = trim($pageNewsManager . '.php');
}
$pageNewsManager = str_replace('../', 'protect', $pageNewsManager);
$pageNewsManager = str_replace('..\\', 'protect', $pageNewsManager);
$pageNewsManager = str_replace(';', 'protect', $pageNewsManager);
$pageNewsManager = str_replace('%', 'protect', $pageNewsManager);
if (preg_match('/admin/', $pageNewsManager)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageNewsManager = 'Model/' . $pageNewsManager;
    if (file_exists($pageNewsManager) && $pageNewsManager != 'index.php') {
        require($pageNewsManager);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\NewsManagerPDO.php');
if (empty($pageNewsManagerPDO)) {
    $pageNewsManagerPDO = 'NewsManagerPDO';
    $pageNewsManagerPDO = trim($pageNewsManagerPDO . '.php');
}
$pageNewsManagerPDO = str_replace('../', 'protect', $pageNewsManagerPDO);
$pageNewsManagerPDO = str_replace('..\\', 'protect', $pageNewsManagerPDO);
$pageNewsManagerPDO = str_replace(';', 'protect', $pageNewsManagerPDO);
$pageNewsManagerPDO = str_replace('%', 'protect', $pageNewsManagerPDO);
if (preg_match('/admin/', $pageNewsManagerPDO)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageNewsManagerPDO = 'Model/' . $pageNewsManagerPDO;
    if (file_exists($pageNewsManagerPDO) && $pageNewsManagerPDO != 'index.php') {
        require($pageNewsManagerPDO);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\UsersManager.php');
if (empty($pageUsersManager)) {
    $pageUsersManager = 'UsersManager';
    $pageUsersManager = trim($pageUsersManager . '.php');
}
$pageUsersManager = str_replace('../', 'protect', $pageUsersManager);
$pageUsersManager = str_replace('..\\', 'protect', $pageUsersManager);
$pageUsersManager = str_replace(';', 'protect', $pageUsersManager);
$pageUsersManager = str_replace('%', 'protect', $pageUsersManager);
if (preg_match('/admin/', $pageUsersManager)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageUsersManager = 'Model/' . $pageUsersManager;
    if (file_exists($pageUsersManager) && $pageUsersManager != 'index.php') {
        require($pageUsersManager);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\UsersManagerPDO.php');
if (empty($pageUsersManagerPDO)) {
    $pageUsersManagerPDO = 'UsersManagerPDO';
    $pageUsersManagerPDO = trim($pageUsersManagerPDO . '.php');
}
$pageUsersManagerPDO = str_replace('../', 'protect', $pageUsersManagerPDO);
$pageUsersManagerPDO = str_replace('..\\', 'protect', $pageUsersManagerPDO);
$pageUsersManagerPDO = str_replace(';', 'protect', $pageUsersManagerPDO);
$pageUsersManagerPDO = str_replace('%', 'protect', $pageUsersManagerPDO);
if (preg_match('/admin/', $pageUsersManagerPDO)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageUsersManagerPDO = 'Model/' . $pageUsersManagerPDO;
    if (file_exists($pageUsersManagerPDO) && $pageUsersManagerPDO != 'index.php') {
        require($pageUsersManagerPDO);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\Entity\News.php');
if (empty($pageNews)) {
    $pageNews = 'News';
    $pageNews = trim($pageNews . '.php');
}
$pageNews = str_replace('../', 'protect', $pageNews);
$pageNews = str_replace('..\\', 'protect', $pageNews);
$pageNews = str_replace(';', 'protect', $pageNews);
$pageNews = str_replace('%', 'protect', $pageNews);
if (preg_match('/admin/', $pageNews)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageNews = 'Model/Entity/' . $pageNews;
    if (file_exists($pageNews) && $pageNews != 'index.php') {
        require($pageNews);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\Entity\User.php');
if (empty($pageUser)) {
    $pageUser = 'User';
    $pageUser = trim($pageUser . '.php');
}
$pageUser = str_replace('../', 'protect', $pageUser);
$pageUser = str_replace('..\\', 'protect', $pageUser);
$pageUser = str_replace(';', 'protect', $pageUser);
$pageUser = str_replace('%', 'protect', $pageUser);
if (preg_match('/admin/', $pageUser)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageUser = 'Model/Entity/' . $pageUser;
    if (file_exists($pageUser) && $pageUser != 'index.php') {
        require($pageUser);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\DBFactory.php');
if (empty($pageDBFactory)) {
    $pageDBFactory = 'DBFactory';
    $pageDBFactory = trim($pageDBFactory . '.php');
}
$pageDBFactory = str_replace('../', 'protect', $pageDBFactory);
$pageDBFactory = str_replace('..\\', 'protect', $pageDBFactory);
$pageDBFactory = str_replace(';', 'protect', $pageDBFactory);
$pageDBFactory = str_replace('%', 'protect', $pageDBFactory);
if (preg_match('/admin/', $pageDBFactory)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageDBFactory = 'Model/' . $pageDBFactory;
    if (file_exists($pageDBFactory) && $pageDBFactory != 'index.php') {
        require($pageDBFactory);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\SplClassLoader.php');
if (empty($pageSplClassLoader)) {
    $pageSplClassLoader = 'SplClassLoader';
    $pageSplClassLoader = trim($pageSplClassLoader . '.php');
}
$pageSplClassLoader = str_replace('../', 'protect', $pageSplClassLoader);
$pageSplClassLoader = str_replace('..\\', 'protect', $pageSplClassLoader);
$pageSplClassLoader = str_replace(';', 'protect', $pageSplClassLoader);
$pageSplClassLoader = str_replace('%', 'protect', $pageSplClassLoader);
if (preg_match('/admin/', $pageSplClassLoader)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageSplClassLoader = 'Model/' . $pageSplClassLoader;
    if (file_exists($pageSplClassLoader) && $pageSplClassLoader != 'index.php') {
        require($pageSplClassLoader);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

function home()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $newsListManager = new NewsManagerPDO($db);
    $newsList = $newsListManager->getListNews();

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
        $pageHeader = 'View/Frontend/' . $pageHeader;
        if (file_exists($pageHeader) && $pageHeader != 'index.php') {
            require($pageHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\Frontend\newsListView.php');
    if (empty($pageNewsListView)) {
        $pageNewsListView = 'newsListView';
        $pageNewsListView = trim($pageNewsListView . '.php');
    }
    $pageNewsListView = str_replace('../', 'protect', $pageNewsListView);
    $pageNewsListView = str_replace('..\\', 'protect', $pageNewsListView);
    $pageNewsListView = str_replace(';', 'protect', $pageNewsListView);
    $pageNewsListView = str_replace('%', 'protect', $pageNewsListView);
    if (preg_match('/admin/', $pageNewsListView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageNewsListView = 'View/Frontend/' . $pageNewsListView;
        if (file_exists($pageNewsListView) && $pageNewsListView != 'index.php') {
            require($pageNewsListView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function news()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $newsManager = new NewsManagerPDO($db);
    $news = $newsManager->getNews($_GET['id']);

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
        $pageHeader = 'View/Frontend/' . $pageHeader;
        if (file_exists($pageHeader) && $pageHeader != 'index.php') {
            require($pageHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\Frontend\newsView.php');
    if (empty($pageNewsView)) {
        $pageNewsView = 'newsView';
        $pageNewsView = trim($pageNewsView . '.php');
    }
    $pageNewsView = str_replace('../', 'protect', $pageNewsView);
    $pageNewsView = str_replace('..\\', 'protect', $pageNewsView);
    $pageNewsView = str_replace(';', 'protect', $pageNewsView);
    $pageNewsView = str_replace('%', 'protect', $pageNewsView);
    if (preg_match('/admin/', $pageNewsView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageNewsView = 'View/Frontend/' . $pageNewsView;
        if (file_exists($pageNewsView) && $pageNewsView != 'index.php') {
            require($pageNewsView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function connexion()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $usersManager = new UsersManagerPDO($db);
    $user = $usersManager->getConnexionUser($_POST['pseudo'], $_POST['password']);
    if (isset($user)){
        session_start();
        $_SESSION['pseudo'] = $user->pseudo();
        $_SESSION['password'] = $user->password();
        $_SESSION['rank'] = $user->rank();
        header('location:index.php');
    }
}
