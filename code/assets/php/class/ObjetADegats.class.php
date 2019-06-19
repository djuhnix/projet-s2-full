<?php
/**
 * Created by PhpStorm.
 * User: sove0002
 * Date: 19/06/2019
 * Time: 09:46
 */

class ObjetADegats extends ObjetSpecial
{
    private $degats;


    /**
     * ObjetADegats constructor.
     * @param $degats
     */
    public function __construct(string $nom ,string $description , int $degats)
    {
        parent::__construct( $nom , $description)
        $this->degats = $degats;
    }

    /**
     * @return int
     */
    public function getDegats(): int
    {
        return $this->degats;
    } //int

}