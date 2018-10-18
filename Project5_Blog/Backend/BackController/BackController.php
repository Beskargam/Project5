<?php

//require('backModel\backNewsManager.php');
if (empty($pageBackNewsManager)) {
    $pageBackNewsManager = 'backNewsManager';
    $pageBackNewsManager = trim($pageBackNewsManager . '.php');
}
$pageBackNewsManager = str_replace('../', 'protect', $pageBackNewsManager);
$pageBackNewsManager = str_replace('..\\', 'protect', $pageBackNewsManager);
$pageBackNewsManager = str_replace(';', 'protect', $pageBackNewsManager);
$pageBackNewsManager = str_replace('%', 'protect', $pageBackNewsManager);
if (preg_match('/admin/', $pageBackNewsManager)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackNewsManager = 'backModel/' . $pageBackNewsManager;
    if (file_exists($pageBackNewsManager) && $pageBackNewsManager != 'backIndex.php') {
        require($pageBackNewsManager);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backCommentsManager.php');
if (empty($pageBackCommentsManager)) {
    $pageBackCommentsManager = 'backCommentsManager';
    $pageBackCommentsManager = trim($pageBackCommentsManager . '.php');
}
$pageBackCommentsManager = str_replace('../', 'protect', $pageBackCommentsManager);
$pageBackCommentsManager = str_replace('..\\', 'protect', $pageBackCommentsManager);
$pageBackCommentsManager = str_replace(';', 'protect', $pageBackCommentsManager);
$pageBackCommentsManager = str_replace('%', 'protect', $pageBackCommentsManager);
if (preg_match('/admin/', $pageBackCommentsManager)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackCommentsManager = 'backModel/' . $pageBackCommentsManager;
    if (file_exists($pageBackCommentsManager) && $pageBackCommentsManager != 'backIndex.php') {
        require($pageBackCommentsManager);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backUsersManager.php');
if (empty($pageBackUsersManager)) {
    $pageBackUsersManager = 'backUsersManager';
    $pageBackUsersManager = trim($pageBackUsersManager . '.php');
}
$pageBackUsersManager = str_replace('../', 'protect', $pageBackUsersManager);
$pageBackUsersManager = str_replace('..\\', 'protect', $pageBackUsersManager);
$pageBackUsersManager = str_replace(';', 'protect', $pageBackUsersManager);
$pageBackUsersManager = str_replace('%', 'protect', $pageBackUsersManager);
if (preg_match('/admin/', $pageBackUsersManager)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackUsersManager = 'backModel/' . $pageBackUsersManager;
    if (file_exists($pageBackUsersManager) && $pageBackUsersManager != 'backIndex.php') {
        require($pageBackUsersManager);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backNewsManagerPDO.php');
if (empty($pageBackNewsManagerPDO)) {
    $pageBackNewsManagerPDO = 'backNewsManagerPDO';
    $pageBackNewsManagerPDO = trim($pageBackNewsManagerPDO . '.php');
}
$pageBackNewsManagerPDO = str_replace('../', 'protect', $pageBackNewsManagerPDO);
$pageBackNewsManagerPDO = str_replace('..\\', 'protect', $pageBackNewsManagerPDO);
$pageBackNewsManagerPDO = str_replace(';', 'protect', $pageBackNewsManagerPDO);
$pageBackNewsManagerPDO = str_replace('%', 'protect', $pageBackNewsManagerPDO);
if (preg_match('/admin/', $pageBackNewsManagerPDO)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackNewsManagerPDO = 'backModel/' . $pageBackNewsManagerPDO;
    if (file_exists($pageBackNewsManagerPDO) && $pageBackNewsManagerPDO != 'backIndex.php') {
        require($pageBackNewsManagerPDO);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backBackCommentsManagerPDO.php');
if (empty($pageBackCommentsManagerPDO)) {
    $pageBackCommentsManagerPDO = 'backCommentsManagerPDO';
    $pageBackCommentsManagerPDO = trim($pageBackCommentsManagerPDO . '.php');
}
$pageBackCommentsManagerPDO = str_replace('../', 'protect', $pageBackCommentsManagerPDO);
$pageBackCommentsManagerPDO = str_replace('..\\', 'protect', $pageBackCommentsManagerPDO);
$pageBackCommentsManagerPDO = str_replace(';', 'protect', $pageBackCommentsManagerPDO);
$pageBackCommentsManagerPDO = str_replace('%', 'protect', $pageBackCommentsManagerPDO);
if (preg_match('/admin/', $pageBackCommentsManagerPDO)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackCommentsManagerPDO = 'backModel/' . $pageBackCommentsManagerPDO;
    if (file_exists($pageBackCommentsManagerPDO) && $pageBackCommentsManagerPDO != 'backIndex.php') {
        require($pageBackCommentsManagerPDO);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backBackUsersManagerPDO.php');
if (empty($pageBackUsersManagerPDO)) {
    $pageBackUsersManagerPDO = 'backUsersManagerPDO';
    $pageBackUsersManagerPDO = trim($pageBackUsersManagerPDO . '.php');
}
$pageBackUsersManagerPDO = str_replace('../', 'protect', $pageBackUsersManagerPDO);
$pageBackUsersManagerPDO = str_replace('..\\', 'protect', $pageBackUsersManagerPDO);
$pageBackUsersManagerPDO = str_replace(';', 'protect', $pageBackUsersManagerPDO);
$pageBackUsersManagerPDO = str_replace('%', 'protect', $pageBackUsersManagerPDO);
if (preg_match('/admin/', $pageBackUsersManagerPDO)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackUsersManagerPDO = 'backModel/' . $pageBackUsersManagerPDO;
    if (file_exists($pageBackUsersManagerPDO) && $pageBackUsersManagerPDO != 'backIndex.php') {
        require($pageBackUsersManagerPDO);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backEntity\backNews.php');
if (empty($pageBackNews)) {
    $pageBackNews = 'backNews';
    $pageBackNews = trim($pageBackNews . '.php');
}
$pageBackNews = str_replace('../', 'protect', $pageBackNews);
$pageBackNews = str_replace('..\\', 'protect', $pageBackNews);
$pageBackNews = str_replace(';', 'protect', $pageBackNews);
$pageBackNews = str_replace('%', 'protect', $pageBackNews);
if (preg_match('/admin/', $pageBackNews)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackNews = 'backModel/backEntity/' . $pageBackNews;
    if (file_exists($pageBackNews) && $pageBackNews != 'backIndex.php') {
        require($pageBackNews);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backEntity\backComment.php');
if (empty($pageBackComment)) {
    $pageBackComment = 'backComment';
    $pageBackComment = trim($pageBackComment . '.php');
}
$pageBackComment = str_replace('../', 'protect', $pageBackComment);
$pageBackComment = str_replace('..\\', 'protect', $pageBackComment);
$pageBackComment = str_replace(';', 'protect', $pageBackComment);
$pageBackComment = str_replace('%', 'protect', $pageBackComment);
if (preg_match('/admin/', $pageBackComment)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackComment = 'backModel/backEntity/' . $pageBackComment;
    if (file_exists($pageBackComment) && $pageBackComment != 'backIndex.php') {
        require($pageBackComment);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backEntity\backUser.php');
if (empty($pageBackUser)) {
    $pageBackUser = 'backUser';
    $pageBackUser = trim($pageBackUser . '.php');
}
$pageBackUser = str_replace('../', 'protect', $pageBackUser);
$pageBackUser = str_replace('..\\', 'protect', $pageBackUser);
$pageBackUser = str_replace(';', 'protect', $pageBackUser);
$pageBackUser = str_replace('%', 'protect', $pageBackUser);
if (preg_match('/admin/', $pageBackUser)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackUser = 'backModel/backEntity/' . $pageBackUser;
    if (file_exists($pageBackUser) && $pageBackUser != 'backIndex.php') {
        require($pageBackUser);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

//require('backModel\backDBFactory.php');
if (empty($pageBackDBFactory)) {
    $pageBackDBFactory = 'backDBFactory';
    $pageBackDBFactory = trim($pageBackDBFactory . '.php');
}
$pageBackDBFactory = str_replace('../', 'protect', $pageBackDBFactory);
$pageBackDBFactory = str_replace('..\\', 'protect', $pageBackDBFactory);
$pageBackDBFactory = str_replace(';', 'protect', $pageBackDBFactory);
$pageBackDBFactory = str_replace('%', 'protect', $pageBackDBFactory);
if (preg_match('/admin/', $pageBackDBFactory)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackDBFactory = 'backModel/' . $pageBackDBFactory;
    if (file_exists($pageBackDBFactory) && $pageBackDBFactory != 'backIndex.php') {
        require($pageBackDBFactory);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

function home()
{
    //require('backView\backHeader.php');
    if (empty($pageBackHeader)) {
        $pageBackHeader = 'backHeader';
        $pageBackHeader = trim($pageBackHeader . '.php');
    }
    $pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
    if (preg_match('/admin/', $pageBackHeader)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHeader = 'backView/' . $pageBackHeader;
        if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
            require($pageBackHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backFooter.php');
    if (empty($pageBackFooter)) {
        $pageBackFooter = 'backFooter';
        $pageBackFooter = trim($pageBackFooter . '.php');
    }
    $pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
    if (preg_match('/admin/', $pageBackFooter)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackFooter = 'backView/' . $pageBackFooter;
        if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
            require($pageBackFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backHomeView.php');
    if (empty($pageBackHomeView)) {
        $pageBackHomeView = 'backHomeView';
        $pageBackHomeView = trim($pageBackHomeView . '.php');
    }
    $pageBackHomeView = str_replace('../', 'protect', $pageBackHomeView);
    $pageBackHomeView = str_replace('..\\', 'protect', $pageBackHomeView);
    $pageBackHomeView = str_replace(';', 'protect', $pageBackHomeView);
    $pageBackHomeView = str_replace('%', 'protect', $pageBackHomeView);
    if (preg_match('/admin/', $pageBackHomeView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHomeView = 'backView/' . $pageBackHomeView;
        if (file_exists($pageBackHomeView) && $pageBackHomeView != 'backIndex.php') {
            require($pageBackHomeView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

//require('backModel\backSplClassLoader.php');
if (empty($pageBackSplClassLoader)) {
    $pageBackSplClassLoader = 'backSplClassLoader';
    $pageBackSplClassLoader = trim($pageBackSplClassLoader . '.php');
}
$pageBackSplClassLoader = str_replace('../', 'protect', $pageBackSplClassLoader);
$pageBackSplClassLoader = str_replace('..\\', 'protect', $pageBackSplClassLoader);
$pageBackSplClassLoader = str_replace(';', 'protect', $pageBackSplClassLoader);
$pageBackSplClassLoader = str_replace('%', 'protect', $pageBackSplClassLoader);
if (preg_match('/admin/', $pageBackSplClassLoader)) {
    throw new Exception('Cette zone est réservée au personnel abilité uniquement');
} else {
    $pageBackSplClassLoader = 'BackModel/' . $pageBackSplClassLoader;
    if (file_exists($pageBackSplClassLoader) && $pageBackSplClassLoader != 'backIndex.php') {
        require($pageBackSplClassLoader);
    } else {
        throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
    }
}

function newsList()
{
    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $newsListManager = new BackNewsManagerPDO($db);
    $newsList = $newsListManager->getListNews();

    //require('backView\backHeader.php');
    if (empty($pageBackHeader)) {
        $pageBackHeader = 'backHeader';
        $pageBackHeader = trim($pageBackHeader . '.php');
    }
    $pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
    if (preg_match('/admin/', $pageBackHeader)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHeader = 'backView/' . $pageBackHeader;
        if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
            require($pageBackHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backFooter.php');
    if (empty($pageBackFooter)) {
        $pageBackFooter = 'backFooter';
        $pageBackFooter = trim($pageBackFooter . '.php');
    }
    $pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
    if (preg_match('/admin/', $pageBackFooter)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackFooter = 'backView/' . $pageBackFooter;
        if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
            require($pageBackFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backNewsListView.php');
    if (empty($pageBackNewsListView)) {
        $pageBackNewsListView = 'backNewsListView';
        $pageBackNewsListView = trim($pageBackNewsListView . '.php');
    }
    $pageBackNewsListView = str_replace('../', 'protect', $pageBackNewsListView);
    $pageBackNewsListView = str_replace('..\\', 'protect', $pageBackNewsListView);
    $pageBackNewsListView = str_replace(';', 'protect', $pageBackNewsListView);
    $pageBackNewsListView = str_replace('%', 'protect', $pageBackNewsListView);
    if (preg_match('/admin/', $pageBackNewsListView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackNewsListView = 'backView/' . $pageBackNewsListView;
        if (file_exists($pageBackNewsListView) && $pageBackNewsListView != 'backIndex.php') {
            require($pageBackNewsListView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function news()
{
    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $newsManager = new BackNewsManagerPDO($db);
    $pageBackCommentsManager = new BackCommentsManagerPDO($db);

    $news = $newsManager->getNews($_GET['id']);
    $commentsList = $pageBackCommentsManager->getValidListComments($_GET['id']);

    //require('backView\backHeader.php');
    if (empty($pageBackHeader)) {
        $pageBackHeader = 'backHeader';
        $pageBackHeader = trim($pageBackHeader . '.php');
    }
    $pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
    if (preg_match('/admin/', $pageBackHeader)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHeader = 'backView/' . $pageBackHeader;
        if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
            require($pageBackHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backFooter.php');
    if (empty($pageBackFooter)) {
        $pageBackFooter = 'backFooter';
        $pageBackFooter = trim($pageBackFooter . '.php');
    }
    $pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
    if (preg_match('/admin/', $pageBackFooter)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackFooter = 'backView/' . $pageBackFooter;
        if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
            require($pageBackFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backNewsView.php');
    if (empty($pageBackNewsView)) {
        $pageBackNewsView = 'backNewsView';
        $pageBackNewsView = trim($pageBackNewsView . '.php');
    }
    $pageBackNewsView = str_replace('../', 'protect', $pageBackNewsView);
    $pageBackNewsView = str_replace('..\\', 'protect', $pageBackNewsView);
    $pageBackNewsView = str_replace(';', 'protect', $pageBackNewsView);
    $pageBackNewsView = str_replace('%', 'protect', $pageBackNewsView);
    if (preg_match('/admin/', $pageBackNewsView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackNewsView = 'backView/' . $pageBackNewsView;
        if (file_exists($pageBackNewsView) && $pageBackNewsView != 'backIndex.php') {
            require($pageBackNewsView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function commentsValidationList()
{
    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $commentsValidationListManager = new BackCommentsManagerPDO($db);
    $commentsValidationList = $commentsValidationListManager->getCommentsValidationList();

    //require('backView\backHeader.php');
    if (empty($pageBackHeader)) {
        $pageBackHeader = 'backHeader';
        $pageBackHeader = trim($pageBackHeader . '.php');
    }
    $pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
    if (preg_match('/admin/', $pageBackHeader)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHeader = 'backView/' . $pageBackHeader;
        if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
            require($pageBackHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backFooter.php');
    if (empty($pageBackFooter)) {
        $pageBackFooter = 'backFooter';
        $pageBackFooter = trim($pageBackFooter . '.php');
    }
    $pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
    if (preg_match('/admin/', $pageBackFooter)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackFooter = 'backView/' . $pageBackFooter;
        if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
            require($pageBackFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backCommentsValidationView.php');
    if (empty($pageBackCommentsValidationView)) {
        $pageBackCommentsValidationView = 'backCommentsValidationView';
        $pageBackCommentsValidationView = trim($pageBackCommentsValidationView . '.php');
    }
    $pageBackCommentsValidationView = str_replace('../', 'protect', $pageBackCommentsValidationView);
    $pageBackCommentsValidationView = str_replace('..\\', 'protect', $pageBackCommentsValidationView);
    $pageBackCommentsValidationView = str_replace(';', 'protect', $pageBackCommentsValidationView);
    $pageBackCommentsValidationView = str_replace('%', 'protect', $pageBackCommentsValidationView);
    if (preg_match('/admin/', $pageBackCommentsValidationView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackCommentsValidationView = 'backView/' . $pageBackCommentsValidationView;
        if (file_exists($pageBackCommentsValidationView) && $pageBackCommentsValidationView != 'backIndex.php') {
            require($pageBackCommentsValidationView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function validateComment()
{
    $id_comment = $_POST['id'];

    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $validateCommentManager = new BackCommentsManagerPDO($db);
    $validateCommentManager->validateComment($id_comment);
}

function usersList()
{
    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $usersListManager = new BackUsersManagerPDO($db);
    $usersList = $usersListManager->getUsersList();

    //require('backView\backHeader.php');
    if (empty($pageBackHeader)) {
        $pageBackHeader = 'backHeader';
        $pageBackHeader = trim($pageBackHeader . '.php');
    }
    $pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
    if (preg_match('/admin/', $pageBackHeader)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHeader = 'backView/' . $pageBackHeader;
        if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
            require($pageBackHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backFooter.php');
    if (empty($pageBackFooter)) {
        $pageBackFooter = 'backFooter';
        $pageBackFooter = trim($pageBackFooter . '.php');
    }
    $pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
    if (preg_match('/admin/', $pageBackFooter)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackFooter = 'backView/' . $pageBackFooter;
        if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
            require($pageBackFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backUsersListView.php');
    if (empty($pageBackUsersListView)) {
        $pageBackUsersListView = 'backUsersListView';
        $pageBackUsersListView = trim($pageBackUsersListView . '.php');
    }
    $pageBackUsersListView = str_replace('../', 'protect', $pageBackUsersListView);
    $pageBackUsersListView = str_replace('..\\', 'protect', $pageBackUsersListView);
    $pageBackUsersListView = str_replace(';', 'protect', $pageBackUsersListView);
    $pageBackUsersListView = str_replace('%', 'protect', $pageBackUsersListView);
    if (preg_match('/admin/', $pageBackUsersListView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackUsersListView = 'backView/' . $pageBackUsersListView;
        if (file_exists($pageBackUsersListView) && $pageBackUsersListView != 'backIndex.php') {
            require($pageBackUsersListView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function deleteComment()
{
    $id_comment = $_POST['id'];

    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $deleteCommentManager = new BackCommentsManagerPDO($db);
    $deleteCommentManager->deleteComment($id_comment);
}

function editCommentForm()
{
    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $editCommentFormManager = new BackCommentsManagerPDO($db);
    $editCommentForm = $editCommentFormManager->getEditCommentForm($_GET['id']);

    //require('backView\backHeader.php');
    if (empty($pageBackHeader)) {
        $pageBackHeader = 'backHeader';
        $pageBackHeader = trim($pageBackHeader . '.php');
    }
    $pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
    if (preg_match('/admin/', $pageBackHeader)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHeader = 'backView/' . $pageBackHeader;
        if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
            require($pageBackHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backFooter.php');
    if (empty($pageBackFooter)) {
        $pageBackFooter = 'backFooter';
        $pageBackFooter = trim($pageBackFooter . '.php');
    }
    $pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
    if (preg_match('/admin/', $pageBackFooter)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackFooter = 'backView/' . $pageBackFooter;
        if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
            require($pageBackFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backEditCommentView.php');
    if (empty($pageBackEditCommentView)) {
        $pageBackEditCommentView = 'backEditCommentView';
        $pageBackEditCommentView = trim($pageBackEditCommentView . '.php');
    }
    $pageBackEditCommentView = str_replace('../', 'protect', $pageBackEditCommentView);
    $pageBackEditCommentView = str_replace('..\\', 'protect', $pageBackEditCommentView);
    $pageBackEditCommentView = str_replace(';', 'protect', $pageBackEditCommentView);
    $pageBackEditCommentView = str_replace('%', 'protect', $pageBackEditCommentView);
    if (preg_match('/admin/', $pageBackEditCommentView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackEditCommentView = 'backView/' . $pageBackEditCommentView;
        if (file_exists($pageBackEditCommentView) && $pageBackEditCommentView != 'backIndex.php') {
            require($pageBackEditCommentView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function editComment()
{
    $id_comment = $_POST['idComment'];
    $NewContent_comment = $_POST['editCommentary'];

    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $updateCommentManager = new BackCommentsManagerPDO($db);
    $updateCommentManager->updateComment($id_comment, $NewContent_comment);
}

function addNewsForm()
{
    //require('backView\backHeader.php');
    if (empty($pageBackHeader)) {
        $pageBackHeader = 'backHeader';
        $pageBackHeader = trim($pageBackHeader . '.php');
    }
    $pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
    if (preg_match('/admin/', $pageBackHeader)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHeader = 'backView/' . $pageBackHeader;
        if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
            require($pageBackHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backFooter.php');
    if (empty($pageBackFooter)) {
        $pageBackFooter = 'backFooter';
        $pageBackFooter = trim($pageBackFooter . '.php');
    }
    $pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
    if (preg_match('/admin/', $pageBackFooter)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackFooter = 'backView/' . $pageBackFooter;
        if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
            require($pageBackFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backAddNewsView.php');
    if (empty($pageBackAddNewsView)) {
        $pageBackAddNewsView = 'backAddNewsView';
        $pageBackAddNewsView = trim($pageBackAddNewsView . '.php');
    }
    $pageBackAddNewsView = str_replace('../', 'protect', $pageBackAddNewsView);
    $pageBackAddNewsView = str_replace('..\\', 'protect', $pageBackAddNewsView);
    $pageBackAddNewsView = str_replace(';', 'protect', $pageBackAddNewsView);
    $pageBackAddNewsView = str_replace('%', 'protect', $pageBackAddNewsView);
    if (preg_match('/admin/', $pageBackAddNewsView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackAddNewsView = 'backView/' . $pageBackAddNewsView;
        if (file_exists($pageBackAddNewsView) && $pageBackAddNewsView != 'backIndex.php') {
            require($pageBackAddNewsView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function addNews()
{
    $title = $_POST['addTitle_News'];
    $intro = $_POST['addIntro_News'];
    $content_news = $_POST['addContent_News'];

    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $addNewsManager = new BackNewsManagerPDO($db);
    $addNewsManager->addNews($title, $intro, $content_news);
}

function editNewsForm()
{
    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $editNewsFormManager = new BackNewsManagerPDO($db);
    $editNewsForm = $editNewsFormManager->getEditNewsForm($_GET['id']);

    //require('backView\backHeader.php');
    if (empty($pageBackHeader)) {
        $pageBackHeader = 'backHeader';
        $pageBackHeader = trim($pageBackHeader . '.php');
    }
    $pageBackHeader = str_replace('../', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('..\\', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace(';', 'protect', $pageBackHeader);
    $pageBackHeader = str_replace('%', 'protect', $pageBackHeader);
    if (preg_match('/admin/', $pageBackHeader)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackHeader = 'backView/' . $pageBackHeader;
        if (file_exists($pageBackHeader) && $pageBackHeader != 'backIndex.php') {
            require($pageBackHeader);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backFooter.php');
    if (empty($pageBackFooter)) {
        $pageBackFooter = 'backFooter';
        $pageBackFooter = trim($pageBackFooter . '.php');
    }
    $pageBackFooter = str_replace('../', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('..\\', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace(';', 'protect', $pageBackFooter);
    $pageBackFooter = str_replace('%', 'protect', $pageBackFooter);
    if (preg_match('/admin/', $pageBackFooter)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackFooter = 'backView/' . $pageBackFooter;
        if (file_exists($pageBackFooter) && $pageBackFooter != 'backIndex.php') {
            require($pageBackFooter);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }

    //require('backView\backEditNewsView.php');
    if (empty($pageBackEditNewsView)) {
        $pageBackEditNewsView = 'backEditNewsView';
        $pageBackEditNewsView = trim($pageBackEditNewsView . '.php');
    }
    $pageBackEditNewsView = str_replace('../', 'protect', $pageBackEditNewsView);
    $pageBackEditNewsView = str_replace('..\\', 'protect', $pageBackEditNewsView);
    $pageBackEditNewsView = str_replace(';', 'protect', $pageBackEditNewsView);
    $pageBackEditNewsView = str_replace('%', 'protect', $pageBackEditNewsView);
    if (preg_match('/admin/', $pageBackEditNewsView)) {
        throw new Exception('Cette zone est réservée au personnel abilité uniquement');
    } else {
        $pageBackEditNewsView = 'backView/' . $pageBackEditNewsView;
        if (file_exists($pageBackEditNewsView) && $pageBackEditNewsView != 'backIndex.php') {
            require($pageBackEditNewsView);
        } else {
            throw new Exception('Vous naviguez dans l\'espace inconnu, il n\'y a rien dans cette zone...');
        }
    }
}

function editNews()
{
    $id_news = $_GET['id'];
    $newContent_news = $_POST['editContent_news'];
    $newIntro_news = $_POST['editIntro'];
    $newTitle_news = $_POST['editTitle_news'];

    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $updateNewsManager = new BackNewsManagerPDO($db);
    $updateNewsManager->updateNews($id_news, $newIntro_news, $newContent_news, $newTitle_news);
}

function deleteNews()
{
    $id_news = $_POST['id'];

    $db = BackDBFactory::getMysqlConnexionWithPDO();

    $deleteNewsManager = new BackNewsManagerPDO($db);
    $deleteNewsManager->deleteNews($id_news);
}
