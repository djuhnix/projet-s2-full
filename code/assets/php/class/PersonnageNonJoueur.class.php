<?php
require_once "../autoload.php";


class PersonnageNonJoueur extends Personnage
{
    private $quete;
    private $accompli;
    private $dialogue;

    public function __construct(string $nom, Quete $quete,
                                bool $accompli = False, string $dialogue)
    {
        parent::__construct($nom);
        $this -> quete = $quete;
        $this -> accompli = $accompli;
        $tjis -> dialogue = $dialogue;
    }
    public function parler() : string
    {
        return $this -> dialogue;
    }
}