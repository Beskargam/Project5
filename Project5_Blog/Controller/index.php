<?php
require('controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'home') {
        home();
    } elseif ($_GET['action'] == 'news') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            news();
        } else {
            echo 'Erreur : L\'identifiant du saut quantum n\'a pas été envoyé';
        }
    } else {
        echo 'Erreur : L\'URL a détecté une anomalie interne';
    }
} else {
    home();
}