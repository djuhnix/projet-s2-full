<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 18/06/2019
 * Time: 17:28
 */
require_once ('autoload.php');
class ObjetSpecial extends Objet
{
    private $utilite;

    /**
     * ObjetSpecial constructor.
     * @param $nom,$description,$utilite
     */
    public function __construct(string $nom ,string $description,string $utilite)
    {
        parent::__construct($nom,$description);
        $this->utilite = $utilite;
    }

    /**
     * @return string
     */
    public function getUtilite(): string
    {
        return $this->utilite;
    } //string


}