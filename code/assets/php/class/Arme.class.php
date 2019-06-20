<?php
require_once "Equipement.class.php";
class Arme extends Equipement
{
  private $degats;//int
  public function __construct(string $nomEquip,int $degats)
  {
    parent::__construct($nomEquip);
    $this->degats=$degats;
  }
  public function getDegats ():int
  {
    return $this->degats;
  }
}
