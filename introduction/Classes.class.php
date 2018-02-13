<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/02/2018
 * Time: 11:29
 */

class Classes
{
    private $NomClasse,
            $Eleves = [];

    /**
     * Classes constructor.
     * @param $NomClasse
     */
    public function __construct(
            $NomClasse){

        $this->NomClasse = $NomClasse;


}
    /**
     * @return array
     */
    public function getEleves()
    {
        return $this->Eleves;
    }

    /**
     * @return mixed
     */
    public function getNomClasse()
    {
        return $this->NomClasse;
    }


    /**
     * @param mixed $NomClasse
     */
    public function setNomClasse($NomClasse)
    {
        $this->NomClasse = $NomClasse;
    }

    /**
     * @param array $Eleves
     */
    public function AjouterEleves(Eleves $Eleves)
    {
        $this->Eleves[] = $Eleves;
    }
}
