<?php
namespace App\Controlleur;

class ControlleurAnnonce extends Controlleur {

    public function execute($action){

        if($action == 'depot'){
            $vue = 'post';
        }
        if($action == 'recherche'){
            $vue = 'home';
        }
        if($action == 'dashboard'){
            $vue = 'dashboard';
        }
        
        $this->render($vue);
    }
}