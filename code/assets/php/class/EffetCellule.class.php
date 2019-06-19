<?php


class EffetCellule extends Traversable
{

    private $nbDegats;

    public function __construct(Image $texture, int $nbDegats = 0, Inventaire $objets = NULL,
                                PersonnageNonJoueur $personnage = NULL,
                                Ennemi $adversaire = NULL)
    {
        parent::__construct($texture,$objets,$personnage,$adversaire);
        $this -> nbDegats = $nbDegats;
    }
    public function infligeDegats() : int
    {
        return $this -> nbDegats;
    }

    public function procureSoin() : int
    {
        return +1;
    }
    public function procureObjet(Objet $newObj) :
    {
        return $newObj;
    }


}