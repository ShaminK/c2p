<?php
spl_autoload_register(function($nomClass){
    require_once $nomClass.'.class.php';
});

use App\Controlleur\Controlleur;
use App\Controlleur\ControlleurAnnonce;
use App\Controlleur\ControlleurUtilisateur;


if (isset($_GET['entite']) && isset($_GET['action'])) {
    $entite = $_GET['entite'];
    $action = $_GET['action'];
} else {
    $entite = 'annonce';
    $action = 'recherche';
}

switch ($entite){
    case 'annonce':
        $ctrl = new ControlleurAnnonce();
        $ctrl->execute($action);
        break;
    case 'utilisateur':
        $ctrl = new ControlleurUtilisateur();
        $ctrl->execute($action);
        break;
}