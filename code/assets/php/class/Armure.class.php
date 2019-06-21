<?php
require_once "Equipement.class.php";
class Armure extends Equipement
{
  private $protection ;//int
  public function __construct(string $nomEquip,string $description, int $protection)
  {
    parent::__construct($nomEquip, $description);
    $this->protection=$protection;
  }
  public function getProtection():int
  {
    return $this->protection;
  }

}
