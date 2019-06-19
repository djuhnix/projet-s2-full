<?php
// class {}
//public function __construct(){}
// public function get (){}
// public function set (:):void {}
require_once "Objet.class.php";
class Equipement extends Objet
{
  private $nomEquip; //string

  public function __construct(string $nom, string $description, string $nomEquip)
  {
    parent::__construct($nom,$description);
    $this->nomEquip=$nomEquip;
  }
  public function getNomEquip ():string{
    return $this->nomEquip;
  }
}
