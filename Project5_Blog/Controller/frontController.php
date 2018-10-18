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
    if (file_exists($pageNewsManager) AND $pageNewsManager != 'index.php') {
        require($pageNewsManager);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\CommentsManager.php');
if (empty($pageCommentsManager)) {
    $pageCommentsManager = 'CommentsManager';
    $pageCommentsManager = trim($pageCommentsManager . '.php');
}
$pageCommentsManager = str_replace('../', 'protect', $pageCommentsManager);
$pageCommentsManager = str_replace('..\\', 'protect', $pageCommentsManager);
$pageCommentsManager = str_replace(';', 'protect', $pageCommentsManager);
$pageCommentsManager = str_replace('%', 'protect', $pageCommentsManager);
if (preg_match('/admin/', $pageCommentsManager)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageCommentsManager = 'Model/' . $pageCommentsManager;
    if (file_exists($pageCommentsManager) AND $pageCommentsManager != 'index.php') {
        require($pageCommentsManager);
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
    if (file_exists($pageUsersManager) AND $pageUsersManager != 'index.php') {
        require($pageUsersManager);
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
    if (file_exists($pageNewsManagerPDO) AND $pageNewsManagerPDO != 'index.php') {
        require($pageNewsManagerPDO);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\CommentsManagerPDO.php');
if (empty($pageCommentsManagerPDO)) {
    $pageCommentsManagerPDO = 'CommentsManagerPDO';
    $pageCommentsManagerPDO = trim($pageCommentsManagerPDO . '.php');
}
$pageCommentsManagerPDO = str_replace('../', 'protect', $pageCommentsManagerPDO);
$pageCommentsManagerPDO = str_replace('..\\', 'protect', $pageCommentsManagerPDO);
$pageCommentsManagerPDO = str_replace(';', 'protect', $pageCommentsManagerPDO);
$pageCommentsManagerPDO = str_replace('%', 'protect', $pageCommentsManagerPDO);
if (preg_match('/admin/', $pageCommentsManagerPDO)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageCommentsManagerPDO = 'Model/' . $pageCommentsManagerPDO;
    if (file_exists($pageCommentsManagerPDO) AND $pageCommentsManagerPDO != 'index.php') {
        require($pageCommentsManagerPDO);
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
    if (file_exists($pageUsersManagerPDO) AND $pageUsersManagerPDO != 'index.php') {
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
    if (file_exists($pageNews) AND $pageNews != 'index.php') {
        require($pageNews);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('Model\Entity\Comment.php');
if (empty($pageComment)) {
    $pageComment = 'Comment';
    $pageComment = trim($pageComment . '.php');
}
$pageComment = str_replace('../', 'protect', $pageComment);
$pageComment = str_replace('..\\', 'protect', $pageComment);
$pageComment = str_replace(';', 'protect', $pageComment);
$pageComment = str_replace('%', 'protect', $pageComment);
if (preg_match('/admin/', $pageComment)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageComment = 'Model/Entity/' . $pageComment;
    if (file_exists($pageComment) AND $pageComment != 'index.php') {
        require($pageComment);
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
    if (file_exists($pageUser) AND $pageUser != 'index.php') {
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
    if (file_exists($pageDBFactory) AND $pageDBFactory != 'index.php') {
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
    if (file_exists($pageSplClassLoader) AND $pageSplClassLoader != 'index.php') {
        require($pageSplClassLoader);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

function home()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $homeManager = new NewsManagerPDO($db);
    $newsHome = $homeManager->getHome();

    //require('View\header.php');
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
        if (file_exists($pageHeader) AND $pageHeader != 'index.php') {
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
        if (file_exists($pageNavigation) AND $pageNavigation != 'index.php') {
            require($pageNavigation);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\footer.php');
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
        if (file_exists($pageFooter) AND $pageFooter != 'index.php') {
            require($pageFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\home.php');
    if (empty($pageHome)) {
        $pageHome = 'home';
        $pageHome = trim($pageHome . '.php');
    }
    $pageHome = str_replace('../', 'protect', $pageHome);
    $pageHome = str_replace('..\\', 'protect', $pageHome);
    $pageHome = str_replace(';', 'protect', $pageHome);
    $pageHome = str_replace('%', 'protect', $pageHome);
    if (preg_match('/admin/', $pageHome)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageHome = 'View/' . $pageHome;
        if (file_exists($pageHome) AND $pageHome != 'index.php') {
            require($pageHome);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function newsList()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $newsListManager = new NewsManagerPDO($db);
    $newsList = $newsListManager->getListNews();

    //require('View\header.php');
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
        if (file_exists($pageHeader) AND $pageHeader != 'index.php') {
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
        if (file_exists($pageNavigation) AND $pageNavigation != 'index.php') {
            require($pageNavigation);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\footer.php');
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
        if (file_exists($pageFooter) AND $pageFooter != 'index.php') {
            require($pageFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\newsList.php');
    if (empty($pageNewsList)) {
        $pageNewsList = 'newsList';
        $pageNewsList = trim($pageNewsList . '.php');
    }
    $pageNewsList = str_replace('../', 'protect', $pageNewsList);
    $pageNewsList = str_replace('..\\', 'protect', $pageNewsList);
    $pageNewsList = str_replace(';', 'protect', $pageNewsList);
    $pageNewsList = str_replace('%', 'protect', $pageNewsList);
    if (preg_match('/admin/', $pageNewsList)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageNewsList = 'View/' . $pageNewsList;
        if (file_exists($pageNewsList) AND $pageNewsList != 'index.php') {
            require($pageNewsList);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function news()
{
    $db = DBFactory::getMysqlConnexionWithPDO();

    $newsManager = new NewsManagerPDO($db);
    $pageCommentsManager = new CommentsManagerPDO($db);

    $news = $newsManager->getNews($_GET['id']);
    $commentsList = $pageCommentsManager->getValidListComments($_GET['id']);

    //require('View\header.php');
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
        if (file_exists($pageHeader) AND $pageHeader != 'index.php') {
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
        if (file_exists($pageNavigation) AND $pageNavigation != 'index.php') {
            require($pageNavigation);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\footer.php');
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
        if (file_exists($pageFooter) AND $pageFooter != 'index.php') {
            require($pageFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\news.php');
    if (empty($pageNews)) {
        $pageNews = 'news';
        $pageNews = trim($pageNews . '.php');
    }
    $pageNews = str_replace('../', 'protect', $pageNews);
    $pageNews = str_replace('..\\', 'protect', $pageNews);
    $pageNews = str_replace(';', 'protect', $pageNews);
    $pageNews = str_replace('%', 'protect', $pageNews);
    if (preg_match('/admin/', $pageNews)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageNews = 'View/' . $pageNews;
        if (file_exists($pageNews) AND $pageNews != 'index.php') {
            require($pageNews);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function connexion()
{
    $pseudo = $_POST['username'];
    $passwordHash = $_POST['password'];

    $db = DBFactory::getMysqlConnexionWithPDO();

    $usersManager = new UsersManagerPDO($db);
    $user = $usersManager->getConnexionUser($pseudo);
    $password = $user->password();
    $passwordValid = password_verify($passwordHash, $password);
    if ($passwordValid) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $user->id();
        $_SESSION['pseudo'] = $user->pseudo();
        $_SESSION['rank'] = $user->rank();
        $_SESSION['rank_id'] = $user->rank_id();
    }
}

function inscription()
{
    //require('View\header.php');
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
        if (file_exists($pageHeader) AND $pageHeader != 'index.php') {
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
        if (file_exists($pageNavigation) AND $pageNavigation != 'index.php') {
            require($pageNavigation);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\footer.php');
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
        if (file_exists($pageFooter) AND $pageFooter != 'index.php') {
            require($pageFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\inscription.php');
    if (empty($pageInscription)) {
        $pageInscription = 'inscription';
        $pageInscription = trim($pageInscription . '.php');
    }
    $pageInscription = str_replace('../', 'protect', $pageInscription);
    $pageInscription = str_replace('..\\', 'protect', $pageInscription);
    $pageInscription = str_replace(';', 'protect', $pageInscription);
    $pageInscription = str_replace('%', 'protect', $pageInscription);
    if (preg_match('/admin/', $pageInscription)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageInscription = 'View/' . $pageInscription;
        if (file_exists($pageInscription) AND $pageInscription != 'index.php') {
            require($pageInscription);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function addUser()
{
    $pseudo = $_POST['username'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $db = DBFactory::getMysqlConnexionWithPDO();

    $addUsersManager = new UsersManagerPDO($db);
    $addUsersManager->getAddUser($pseudo, $password);
}

function addComment()
{
    $content_comment = $_POST['addCommentary'];

    $db = DBFactory::getMysqlConnexionWithPDO();

    $addCommentManager = new CommentsManagerPDO($db);
    $addCommentManager->AddComment($_GET['id'], $content_comment);
}

function contact()
{
    //require('View\header.php');
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
        if (file_exists($pageHeader) AND $pageHeader != 'index.php') {
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
        if (file_exists($pageNavigation) AND $pageNavigation != 'index.php') {
            require($pageNavigation);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\footer.php');
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
        if (file_exists($pageFooter) AND $pageFooter != 'index.php') {
            require($pageFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('View\contact.php');
    if (empty($pageContact)) {
        $pageContact = 'contact';
        $pageContact = trim($pageContact . '.php');
    }
    $pageContact = str_replace('../', 'protect', $pageContact);
    $pageContact = str_replace('..\\', 'protect', $pageContact);
    $pageContact = str_replace(';', 'protect', $pageContact);
    $pageContact = str_replace('%', 'protect', $pageContact);
    if (preg_match('/admin/', $pageContact)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageContact = 'View/' . $pageContact;
        if (file_exists($pageContact) AND $pageContact != 'index.php') {
            require($pageContact);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function sendMessage()
{
    if(!isset($_SESSION)) {
        session_start();
    }
    $emailSite = 'Arcturus.Morea@gmx.com';

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $emailSite)) {
        $break = "\r\n";
    }
    else {
        $break = "\n";
    }

    $email = $_POST['email'];
    $subject = $_POST['subjectContact'];
    $message_txt = $_POST['messageContact'];
    $message_html = $_POST['messageContact'];

    $boundary = '-----='.md5(rand());

    $header = 'From: "' . $_SESSION['rank'] . ' ' . $_SESSION['pseudo'] . '" <' .$email. '>'.$break;
    $header.= 'Reply-to: "' . $_SESSION['rank'] . ' ' . $_SESSION['pseudo'] . '" <' .$email. '>'.$break;
    $header.= 'MIME-Version: 1.0'.$break;
    $header.= 'Content-Type: multipart/alternative;' .$break. ' boundary="$boundary"' .$break;

    $message = $break.'--'.$boundary.$break;

    //TEXT
    $message.= 'Content-Type: text/plain; charset="ISO-8859-1"'.$break;
    $message.= 'Content-Transfer-Encoding: 8bit'.$break;
    $message.= $break.$message_txt.$break;

    $message.= $break.'--'.$boundary.$break;

    //HTML
    $message.= 'Content-Type: text/html; charset="ISO-8859-1"'.$break;
    $message.= 'Content-Transfer-Encoding: 8bit'.$break;
    $message.= $break.$message_html.$break;

    $message.= $break.'--'.$boundary.'--'.$break;
    $message.= $break.'--'.$boundary.'--'.$break;

    mail($emailSite,$subject,$message,$header);
}
