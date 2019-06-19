<?php

require_once "../autoload.php";

class NonTraversable extends Cellule
{
    public function __construct(Image $texture, Inventaire $objets = NULL,
                                PersonnageNonJoueur $personnage = NULL,
                                Ennemi $adversaire = NULL )
    {
        parent::__construct();
        $this->texture = $texture;
        $this->objets = $objets;
        $this->personnage = $personnage;
        $this->adversaire = $adversaire;

    }
}