<?php
namespace App\Controlleur;

abstract class Controlleur {

    abstract function execute(string $action);

    protected function render($vue, $param =array()){
        extract($param);
        include 'App/vues/template.php';
    }
}