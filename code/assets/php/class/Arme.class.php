<?php
require_once "Equipement.class.php";
class Arme extends Equipement
{
  private $degats;//int
  public function __construct(string $nomEquip, string $description, int $degats)
  {
    parent::__construct($nomEquip, $description);
    $this->degats=$degats;
  }
  public function getDegats():int
  {
    return $this->degats;
  }
}
