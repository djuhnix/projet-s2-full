<?php

require_once "../autoload.php";

class Ennemi extends Personnage implements Interaction
{
    private $pointsVie;
    private $degats;
    private $experienceRapporte;
    private $butin;

    public function __construct(String $newNom, int $PV, int $degat, int $exp, Objet $butin )
    {
        parent::__construct($newNom);
        $this -> pointsVie = $PV;
        $this -> degats = $degat;
        $this -> experienceRapporte = $exp;
        $this -> butin = $butin;
    }
    public function mourir() : void
    {
        if ($this -> pointsVie == 0)
            
            unlink($this);
    }
    public function seFaireAttaquer() : void
    {
        $this -> pointsVie =- 1;
    }
    
    public function seDeplacer( int $x, int $y);

    public function interagir(Object $cible);


}