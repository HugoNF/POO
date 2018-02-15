<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 12:33
 */

namespace Core\Controller;


use Application\Model\Categorie\CategorieDb;

class AppController
{
    private $_viewparams;

    /**
     * Permet de générer l'affichage
     *de la vue en paramètre.
     * @param $view Vue à afficher.
     * @param array $viewparam Données à passer à la vue.
     */
    protected function render($view,Array $viewparams = []){
        # Récupération et Affectation des Paramètre de la Vue
        $this->_viewparams = $viewparams;

        extract($this->_viewparams);

        # Chargement du Header
        include_once  PATH_HEADER;

        # Chargement de la Vue
        include_once  PATH_VIEWS . '/' . $view . '.php';

        # Chargement du Footer
        include_once  PATH_FOOTER;
    }

    /**
     * @return mixed
     */
    public function getViewparams()
    {
        $object = new \ArrayObject(($this-> _viewparams));
        $object->setFlags(\ArrayObject::ARRAY_AS_PROPS);
        return $object;
    }


    /**
     * Permet de débugger les paramètres de la vue
     * ou le paramètre passé à la fonction.
     * @param array $params
     */
    public function debug(Array $params = []){
        if(empty($params)) :
            $params = $this->_viewparams;
        endif;
        echo '<pre>';
            print_r($params);
        echo '</pre>';
    }

public function  getAction(){
        return empty($_GET['action']) ? 'action' : $_GET['action'];
}


}