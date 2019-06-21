<?php
/**
* public function __construct(){}
* public function get (){}
* public function set (:):void {}
 */
require_once "../../autoload.php";
class Quete
{
  private $libelle;//string
  private $description; //string
  private $etatQuete; //etatQuete
  private $recompense; //Array Objet
  private $objetRecuperation;  //Array Objet
  private $nombreExemplaire; //int
  private $experienceRapporte;//int


  public function __construct(string $libelle , string $description,
  EtatQuete $etatQuete, Objet  $recompense, Objet $objetRecuperation,
  int $nombreExemplaire, int $experienceRapporte)
  {

    $this->libelle=$libelle;
    $this->description=$description;
    $this->etatQuete=$etatQuete;
    $this->recompense=$recompense;
    $this->objetRecuperation=$objetRecuperation;
    $this->nombreExemplaire=$nombreExemplaire;
    $this->experienceRapporte=$experienceRapporte;
  }
  public function getLibelle():string{
    return $this->libelle;
  }
  public function getDescription ():string{
    return $this->description;
  }
  public function getEtatQuete ():etatQuete{
    return $this->etatQuete;
  }
  public function getRecompense ():Objet{
    return $this->recompense;
  }
  public function getObjetRecuperation ():Objet{
    return $this->objetRecuperation;
  }
  public function getNombreExemplaire ():int{
    return $this->nombreExemplaire;
  }
  public function getExperienceRapporte ():int{
    return $this->experienceRapporte;
  }
  public function setEtatQuete (etatQuete $etatQuete):void
  {
    $etatQuetInital=$this->etatQuete;
    if ($etatQuetInital==1)
    {
      $this->EtatQuete=$etatQuete;

    }
    elseif ($etatQuetInital==2)
    {
      $this->EtatQuete=$etatQuete;
    }
    else
    {
      $etatQuetInital=3;
      $this->EtatQuete=$etatQuete;

    }

  }
  public function afficherRecompense() : void
  {
    echo $this -> recompense -> getNom();
  }
  public function prendreRecompense(Joueur $player) : void
  {
    $player->  prendreObjet($this->recompense);
    $this -> recompense = NULL;
  }

  public function recupererExperience() : int
  {
      if ($this-> etatQuete::Reussis) {
          return $this->experienceRapporte;
      } else
          return 0;
  }

}
