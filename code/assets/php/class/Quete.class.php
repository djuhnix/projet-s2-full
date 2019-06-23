<?php
require_once "../../autoload.php";
 //la classe Quete
class Quete
{
  private $libelle;//string
  private $description; //string
  private $etatQuete; //etatQuete
  private $recompense; //Array Objet
  private $objetRecuperation;  //Array Objet
  private $nombreExemplaire; //int
  private $experienceRapporte;//int
  
  /*
  Constructeur de la classe Quete
  * @param libelle  : nom de la quete
  * @param  description : description de l'objet
  @param etatQuete  : etat de la quete
  @param recompense  : l'objet donné après avoir fini la quete
  @param objetRecuperation  :  l'objet de la quete
  @param nombreExemplaire  : nombre d'objet à recupérer
  @param experienceRapporte  : expérience donné quand la quete est finie
  * */
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
  
  
    /*
    * accesseur de libelle
    * @return Titre de la quete
* */
  public function getLibelle():string{
    return $this->libelle;
  }
  

  /*
    * accesseur de l'attribut description
    * @return affiche une chaine de caractère qui est la description de la quetes
* */
  public function getDescription ():string{
    return $this->description;
  }
  

  /*
    * accesseur de l'attribut etatQuete
    * @return etat de la quete
* */
  public function getEtatQuete ():etatQuete{
    return $this->etatQuete;
  }
  

  /*
    * accesseur de l'attribut recompense
    * @return   l'objet de la recompense
* */
  public function getRecompense ():Objet{
    return $this->recompense;
  }
  

  /*
    * accesseur de l'attribut objetRecuperation
    * @return le type de récompense
* */
  public function getObjetRecuperation ():Objet{
    return $this->objetRecuperation;
  }
  

  /*
    * accesseur de l'attribut nombreExemplaire
    * @return nombre d'objet que demande la quete
* */
  public function getNombreExemplaire ():int{
    return $this->nombreExemplaire;
  }
  

  /*
    * accesseur de l'attribut experienceRapporte
    * @return nombre de point d'expérience que rapporte la quete
    */
  public function getExperienceRapporte ():int{
    return $this->experienceRapporte;
  }
  
  
    /*
    * modificateur de l'attribut EtatQuete
    changement d'un état à un autre
    * @param etatQuete : nouvel état de la quete
* */

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
