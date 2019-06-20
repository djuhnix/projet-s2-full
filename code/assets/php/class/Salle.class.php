<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 19/06/2019
 * Time: 11:35
 */
require_once ("autoload.php");
class Salle
{
    private $nom; //string
    private $longeur; //int
    private $largeur; //int
    private $description; //string
    private $cases; //array
    private $entreerNord; //cellule
    private $entreerSud; //cellule
    private $entreerOuest; //cellule
    private $entreerEst; //cellule

    /**
     * Salle constructor.
     * @param $nom
     * @param $longeur
     * @param $largeur
     * @param $description
     * @param $cases
     * @param $entréerNord
     * @param $entréerSud
     * @param $entréerOuest
     * @param $entréerEst
     */
    public function __construct(string $nom, int $longeur,int $largeur, string $description, array $cases, Cellule $entréerNord, Cellule $entréerSud, Cellule $entréerOuest, Cellule $entréerEst)
    {
        $this->nom = $nom;
        $this->longeur = $longeur;
        $this->largeur = $largeur;
        $this->description = $description;
        $this->cases = $cases;
        $this->entréerNord = $entréerNord;
        $this->entréerSud = $entréerSud;
        $this->entréerOuest = $entréerOuest;
        $this->entréerEst = $entréerEst;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getLongeur(): int
    {
        return $this->longeur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getCases(): array
    {
        return $this->cases;
    }

    /**
     * @return Cellule
     */
    public function getEntréerNord(): Cellule
    {
        return $this->entréerNord;
    }

    /**
     * @return Cellule
     */
    public function getEntréerSud(): Cellule
    {
        return $this->entréerSud;
    }

    /**
     * @return Cellule
     */
    public function getEntréerOuest(): Cellule
    {
        return $this->entréerOuest;
    }

    /**
     * @return Cellule
     */
    public function getEntréerEst(): Cellule
    {
        return $this->entréerEst;
    }
    public function ajouterCellule(Cellule $cellule):None
    {
        array_push($this->cases,$cellule);
    }

}