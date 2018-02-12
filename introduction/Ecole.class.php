<?php

/**
 * Création d'une classe Ecole :
 * Une Classe PHP est une entité regroupant des
 * variables et des fonctions.
 * Chacune de ces fonctions aura accès aux
 * variables et cette entité.
 */

class Ecole
{
    #Déclaration des proprriétés de notre class "Ecole":
    private $NomEcole,
        $AdresseEcole,
        $DirecteurEcole,
        $Classes = [];

# Afin de pouvoir attribué une valeur à
# mes différentes variables je vais mettre
# en place un constructeur.

    /**
     * Ecole constructor.
     * @param $NomEcole
     * @param $AdresseEcole
     * @param $DirecteurEcole
     */

    public function __construct(
        $NomEcole,
        $AdresseEcole,
        $DirecteurEcole) {

        #Ici, nous allons attribuer une valeur
        #aux propriétés de la class.
        #La valeur est passé grâce au constructeur.

        $this->NomEcole  =$NomEcole;
        $this->AdresseEcole  =$AdresseEcole;
        $this->DirecteurEcole  =$DirecteurEcole;
    }
/*-----------------------------------Getter--------------------------------------*/

    /**
     * @return mixed
     */
    public function getDirecteurEcole()
    {
        return $this->DirecteurEcole;
    }

    /**
     * @return mixed
     */
    public function getNomEcole()
    {
        return $this->NomEcole;
    }

    /**
     * @return mixed
     */
    public function getAdresseEcole($AdresseEcole)
    {
        return $this->AdresseEcole = $AdresseEcole;
    }

    /**
     * @param mixed $NomEcole
     */
    public function setNomEcole($NomEcole)
    {
        $this->NomEcole = $NomEcole;
    }

    /**
     * @param array $Classes
     */
    public function AjouterClasses(Classes $Classes)
    {
        $this->Classes[] = $Classes;
    }

    /**
     * @param mixed $AdresseEcole
     */
    public function setAdresseEcole($AdresseEcole)
    {
        $this->AdresseEcole = $AdresseEcole;
    }

    /**
     * @param mixed $DirecteurEcole
     */
    public function setDirecteurEcole($DirecteurEcole)
    {
        $this->DirecteurEcole = $DirecteurEcole;
    }
}