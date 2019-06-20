<?php
require_once "Equipement.class.php";
class Bouclier extends Equipement
{
  private $protection ;//int
  public function __construct(string $nomEquip, int $protection)
  {
    parent::__construct($nomEquip);
    $this->protection=$protection;
  }
  public function getProtections ():int
  {
    return $this->protection;
  }

}
