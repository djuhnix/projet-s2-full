<?php

require_once "Personnage.class.php";

class Joueur extends Personnage
{
    private  $pointVie ; //Int
    private  $xp ; //int
    private  $niveau ; //int
    private  $quetes ; //Quête[]
    private  $objetsEquipes ; // Equipement[]
    private  $position ; //Cellule


    public function __construct ()
    {
        parent::__construct("Angel");
        $this->pointVie = 3;
        $this->xp = 1;
        $this->niveau = 1;
        $this->quetes = array();
        $this->objetsEquipes = array();
        $this->position = null;
    }

    
}