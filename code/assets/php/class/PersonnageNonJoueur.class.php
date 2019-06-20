<?php
require_once "../../autoload.php";


class PersonnageNonJoueur extends Personnage
{
    private $quete;
    private $accompli;
    private $dialogue;


    /**
     * PersonnageNonJoueur constructor.
     * @param string $nom
     * @param Quete $quete
     * @param bool $accompli
     * @param string $dialogue
     */
    public function __construct(string $nom, Quete $quete,
                                bool $accompli = False, string $dialogue)
    {
        parent::__construct($nom);
        $this -> quete = $quete;
        $this -> accompli = $accompli;
        $this -> dialogue = $dialogue;
    }

    /**
     * Retourne le dialogue du PNJ correspondant
     * @return string
     */
    public function parler() : string
    {
        return $this -> dialogue."\n";
    }
}