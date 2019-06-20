<?php

require_once "../autoload.php";

class Ennemi extends Personnage implements Interaction
{
    private $pointsVie;
    private $degats;
    private $experienceRapporte;
    private $butin;

    /**
     * Ennemi constructor.
     * @param String $newNom
     * @param int $PV
     * @param int $degat
     * @param int $exp
     * @param Objet $butin
     */
    public function __construct(String $newNom, int $PV, int $degat, int $exp, Objet $butin )
    {
        parent::__construct($newNom);
        $this -> pointsVie = $PV;
        $this -> degats = $degat;
        $this -> experienceRapporte = $exp;
        $this -> butin = $butin;
    }

    /**
     * Méthode qui supprime l'ennemùi si ses points de vie sont égales à 0
     */
    public function mourir() : void
    {
        if ($this -> pointsVie == 0)
            unlink($this);
    }
    /**
     * Méthode qui enlève -1 aux points de vie de l'ennemi lorsqu'il se fait attaquer par le joueur
     */
    public function seFaireAttaquer() : void
    {
        $this -> pointsVie =- 1;
    }

}