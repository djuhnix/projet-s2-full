<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 18/06/2019
 * Time: 16:33
 */
//la classe mère Objet
class Objet
{
    private $nom ; //string
    private $description ; //string
    /*
    Constructeur de la classe Objet
    * @param name  : nom de l'objet
    * @param  description : description de l'objet
    * */
    function __construct(string $name, string $description)
    {
        $this->nom=$name;
        $this->description=$description;
    }

    /**
     * @return string
     */
    public function getNom() : string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getDescription():string
    {
        return $this->description;
    }
}