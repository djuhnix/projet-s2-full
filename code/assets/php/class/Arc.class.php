<?php
require_once "Arme.class.php";
class Arc extends Arme
{
  private $Portee ;//int
  public function __construct(int $degats, int $Portee)
  {
    parent::__construct($degats);
    $this->Portee=$Portee;
  }
  public function getPortee ():int
  {
    return $this->Portee;
  }

}
