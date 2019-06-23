<?php
require_once "Arme.class.php";
//La classe fille nommée Arc de la classe mère qui est Arme
class Arc extends Arme
{
  private $Portee ;//int
    /*

  Constructeur de la classe Arc
   * @param degats : dégats de l'arme
   * @param Portée : portée de l'arc
   * */
  public function __construct(string $nomEquip, string $description, int $degats, int $Portee)
  {
    parent::__construct($nomEquip,$description,$degats);
    $this->Portee=$Portee;
  }
    /*
    * accesseur de Portée
    * @return la distance de dégats de l'Arc
* */
  public function getPortee ():int
  {
    return $this->Portee;
  }

}
