<?php
require_once "../autoload.php";

class Traversable extends Cellule
{
    public function __construct(Image $texture, Inventaire $objets = NULL,
                                PersonnageNonJoueur $personnage = NULL,
                                Ennemi $adversaire = NULL )
    {
        if (parent::estTraversable())
        {
            parent::__construct();
            $this->texture = $texture;
            $this->objets = $objets;
            $this->personnage = $personnage;
            $this->adversaire = $adversaire;
        }
    }
}