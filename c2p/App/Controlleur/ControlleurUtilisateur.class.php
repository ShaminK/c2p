<?php
namespace App\Controlleur;

class ControlleurUtilisateur extends Controlleur{

    public function execute($action){
        
        if($action == 'connexion'){
            $vue = "connect";
        }
        if($action == 'inscription'){
            $vue = "registration";
        }
        $this->render($vue);

    }
}