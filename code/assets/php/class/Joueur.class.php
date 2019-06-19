<?php

require_once "Personnage.class.php";
require_once "NiveauJoueur.class.php";

class Joueur extends Personnage
{
    private  $pointVie ; //Int
    private  $xp ; //int
    private  $niveau ; //NiveauJoueur
    private  $quetes ; //Quête[]
    private  $objetsEquipes ; // Equipement[]
    private  $position ; //Cellule


    public function __construct ()
    {
        parent::__construct("Angel");
        $this->pointVie = 3;
        $this->xp = 1;
        $this->niveau = NiveauJoueur::Niveau1;
        $this->quetes = array();
        $this->objetsEquipes = array();
        $this->position = null;
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
        XP : {$this->xp} / {$this->niveau[2]}
        Inventaire : {$this->bourse}";
        return $statistique;
    }
    
}