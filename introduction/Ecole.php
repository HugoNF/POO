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


}