<?php

require_once "Interaction.interface.php";
require_once "Personnage.class.php";
require_once "NiveauJoueur.class.php";

class Joueur extends Personnage implements Interaction
{
    private  $pointVie ; //Int
    private  $xp ; //int
    private  $niveau ; //NiveauJoueur
    private  $quetes ; //Quête[]
    private  $objetsEquipes ; // Equipement[]
    private  $position ; //Cellule


    public function __construct (Salle $map)
    {
        parent::__construct("Angel", $map, 5,95)
        $this->pointVie = 3;
        $this->xp = 1;
        $this->niveau = NiveauJoueur::Niveau1;
        $this->quetes = array();
        $this->objetsEquipes = array();
        $this->position = $this->$environement->getCell(5,95);
    }

    public function utiliserObjet(Consommables $item) : void {
        $this->pointVie = $this->niveau[0];
    }
    
    public function prendreObjet(Objet $item) : void {
        echo $this->bourse->ajouterObjet($item);
    }


    public function __toString() : String {
        $statistique = "        Nom : {$this->nom}
        Point de vie : {$this->pointVie} / {$this->niveau[0]}
        XP : {$this->xp} / {$this->niveau[2]}";
        return $statistique;
    }
    
    public function seFaireAttaquer() : void {
        $this->pointVie = $this->pointVie - 1;
    }
    
    public function seDeplacer(int $x, int $y) : void {
        if($this->$environement->$getCases($x,$y)->estTraversable()){
            $this->posX = $x;
            $this->posY = $y;
            $this->position = $this->$environement->$getCases($x,$y);
        }
    }
    
    public function mourir() : Void { echo "Game Over" ;}
    
    public function parlerPNJ(PersonnageNonJoueur $cible) : String {
        // acces à la liste des commande disponible. --> Parler au PNJ
        $cible->parler();
    }
    
    public function recupererRecompence(Quete $qReussi) : void {
        $this->prendreObjet($qReussi->getRecompense());
        $this->xp = $this->xp + $qReussi->getExperienceRapporte();
    }
}