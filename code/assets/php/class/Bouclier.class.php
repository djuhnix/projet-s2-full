<?php
require_once "Equipement.class.php";
class Bouclier extends Equipement
{
  private $protection ;//int
  public function __construct(string $nom, string $desc, int $protection)
  {
    parent::__construct($nom, $desc);
    $this->protection=$protection;
  }
  public function getProtections ():int
  {
    return $this->protection;
  }

}
