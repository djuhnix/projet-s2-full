<?php
/**
* public function __construct(){}
* public function get (){}
* public function set (:):void {}
 */
 require_once "Objet.class.php";
class Quete
{
  private $libelle;//string
  private $description; //string
  private $etatQuete; //etatQuete
  private $recompense; //Array Objet
  private $objetRecuperation;  //Array Objet
  private $nombreExemplaire; //int
  private $experienceRapporte; //int
  function __construct(string $libelle , string $description,
  etatQuete $etatQuete, Objet  $recompense, Objet $objetRecuperation,
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
  public function __toString():string
  {
    $res="Libellé : {$this->$libelle}\n";
    $res=$res."Description : {$this->$description}\n";
    $res=$res."EtatQuete : {$this->$etatQuete}\n";
    $res=$res."Recompense : {$this->$recompense}\n";
    $res=$res."ObjetRecuperation : {$this->$objetRecuperation}\n";
    $res=$res."NombreExemplaire : {$this->$nombreExemplaire}\n";
    $res=$res."ExperienceRapporte : {$this->$experienceRapporte}\n";
    return $res;
  }
  public function afficherRecompense() : void
  {
    echo $this -> recompense;
  }
  public function prendreRecompense(Joueur $player) : void
  {
    $player-> recupererObjet($this->recompense);
    $this -> recompense = NULL;
  }
  public function recupererExperience() : int
  {
      if ($this->EtatQuete == 2)

  }
}
