<?php
require_once('..\Model\manager.php');
require_once('..\Model\NewsManagerPDO.php');
require_once('..\Model\Entity\News.php');
require_once('..\Model\DBFactory.php');
require_once('..\Model\SplClassLoader.php');

function home()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $newsListManager = new NewsManagerPDO($db);
    $newsList = $newsListManager->getListNews();

    require('..\View\newsListView.php');
}

function news()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $newsManager = new NewsManagerPDO($db);
    $news = $newsManager->getNews($_GET['id']);

    require('..\View\newsView.php');
}