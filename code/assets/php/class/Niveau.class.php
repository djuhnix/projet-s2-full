<?php

class Niveau {
    private $name;
    private $longueur;
    private $largeur;
    private $salle;

    /**
     * Niveau constructor.
     * @param $name
     * @param $longueur
     * @param $largeur
     */
    public function __construct(string $name, float $longueur, float $largeur)
    {
        $this->name = $name;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    /**
     * @return String
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getLongueur() : float
    {
        return $this->longueur;
    }

    /**
     * @return float
     */
    public function getLargeur() : float
    {
        return $this->largeur;
    }

    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->salle;
    }

    public function ajouterSalle(Salle $salle) : void
    {
        array_push($this -> salle,$salle);
    }
}