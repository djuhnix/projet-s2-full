<?php
require_once "Equipement.class.php";
class Armures extends Equipement
{
  private $protection ;//int
  public function __construct(string $nomEquip, int $protection)
  {
    parent::__construct($nomEquip);
    $this->protection=$protection;
  }
  public function getProtection():int
  {
    return $this->protection;
  }

}
