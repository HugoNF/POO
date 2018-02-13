<?php
# Importation de notre classe Ecole
require_once 'Ecole.class.php';
require_once 'Classes.class.php';
require_once 'Eleves.class.php';

/**
 * Création d'une instance de la classe Ecole.
 * Ici, notre variable $Ecole est un Object de
 * la classe Ecole. En ce sens, elle a accès à
 * l'ensemble des variables et fonctions qui la
 * compose.
 */

$Ecole = new Ecole(
    'WF3 Rouen',
    'Place Saint-Marc',
    'Alexandre MARRTINI'
);

$Ecole->setNomEcole('Webforce3 Rouen ltd');

echo 'Mon école est la '. $Ecole->getNomEcole();
//echo 'Mon école est '.$Ecole;
$Classes1 = new Classes('Salle de Mathématique');
$Classes2 = new Classes('Salle de Français');
$Classes3 = new Classes('Salle de Sport');


echo '<br>' . 'Je suis actuellement en '. $Classes1->getNomClasse();

$Eleves1  = new Eleves('Ratel',
                    'Hugo',
                       '19');


$Eleves2  = new Eleves('Da Costa',
                    'Theo',
                        '20');


$Eleves3  = new Eleves('Lhermitte',
                    'Joffrey',
                        '20');


$Eleves4  = new Eleves('Bacon',
                    'Terry',
                        '24');

$Classes1->AjouterEleves($Eleves1);
$Classes2->AjouterEleves($Eleves2);
$Classes2->AjouterEleves($Eleves3);
$Classes3->AjouterEleves($Eleves4);

echo ', je suis '.$Eleves1->getPrenom(). ' ' .$Eleves1->getNom() . " et j'ai actuellement " . $Eleves1->getAge().' ans';

$Ecole->AjouterClasses($Classes1);
$Ecole->AjouterClasses($Classes2);
$Ecole->AjouterClasses($Classes3);

echo '<pre>';
    print_r($Ecole);
echo '</pre>';

# Affichage de l'Objet Ecole


# Afficher le nom de l'école
# : Cannot access private property
# echo $Ecole->NumEcole
//echo $Ecole->getNomEcole();

#Je souhaite changer le nom de l'école ?
echo '<ol>';
$lesClasses = $Ecole->getClasses();
foreach ($lesClasses as $objClasse){

    echo '<li>';
        echo $objClasse->getNomClasse();

        echo '<ul>';
            # On récupère les étudiants de la classe
            $lesEtudiants = $objClasse->getEleves();
            foreach ($lesEtudiants as $objEtudiant){
                echo '<li>';
                    echo $objEtudiant->getNomComplet();
                echo '</li>';
            }
        echo '</ul>';

    echo '</li>';

}
echo '</ol>';
