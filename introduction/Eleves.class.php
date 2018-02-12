<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/02/2018
 * Time: 11:29
 */

class Eleves
{

    private $Nom,
            $Prenom,
            $Age;

    /**
     * Eleves constructor.
     * @param $Nom
     * @param $Prenom
     * @param $Age
     */
    public function __construct(
        $Nom,
        $Prenom,
        $Age){

        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Age = $Age;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->Age;
    }
}