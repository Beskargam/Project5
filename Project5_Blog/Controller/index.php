<?php
require('controller.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'home') {
            home();
        } elseif ($_GET['action'] == 'news') {
            if (isset($_GET['id']) && $_GET['iddas'] > 0) {
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
    require('..\Error\errorView.php');
}
