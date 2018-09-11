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
}
else{
    $pageNewsManager = 'Model/'.$pageNewsManager;
    if (file_exists($pageNewsManager) && $pageNewsManager != 'index.php') {
        require($pageNewsManager);
    }
    else {
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
}
else{
    $pageNewsManagerPDO = 'Model/'.$pageNewsManagerPDO;
    if (file_exists($pageNewsManagerPDO) && $pageNewsManagerPDO != 'index.php') {
        require($pageNewsManagerPDO);
    }
    else {
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
}
else{
    $pageNews = 'Model/Entity/'.$pageNews;
    if (file_exists($pageNews) && $pageNews != 'index.php') {
        require($pageNews);
    }
    else {
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
}
else{
    $pageDBFactory = 'Model/'.$pageDBFactory;
    if (file_exists($pageDBFactory) && $pageDBFactory != 'index.php') {
        require($pageDBFactory);
    }
    else {
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
}
else{
    $pageSplClassLoader = 'Model/'.$pageSplClassLoader;
    if (file_exists($pageSplClassLoader) && $pageSplClassLoader != 'index.php') {
        require($pageSplClassLoader);
    }
    else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

function home()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $newsListManager = new NewsManagerPDO($db);
    $newsList = $newsListManager->getListNews();

    //require('View\newsListView.php');
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
    }
    else{
        $pageNewsListView = 'View/Frontend/'.$pageNewsListView;
        if (file_exists($pageNewsListView) && $pageNewsListView != 'index.php') {
            require($pageNewsListView);
        }
        else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function news()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $newsManager = new NewsManagerPDO($db);
    $news = $newsManager->getNews($_GET['id']);

    //require('View\newsView.php');
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
    }
    else{
        $pageNewsView = 'View/Frontend/'.$pageNewsView;
        if (file_exists($pageNewsView) && $pageNewsView != 'index.php') {
            require($pageNewsView);
        }
        else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}