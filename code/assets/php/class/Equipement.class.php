<?php
// class {}
//public function __construct(){}
// public function get (){}
// public function set (:):void {}
require_once "Objet.class.php";
class Equipement extends Objet
{

    public function __construct(string $nom, string $description)
    {
        parent::__construct($nom,$description);
    }

}
