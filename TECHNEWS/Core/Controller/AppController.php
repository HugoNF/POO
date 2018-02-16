<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 12:33
 */

namespace Core\Controller;

use Core\Model\DbFactory;
use Core\Model\Helper;

class AppController
{
    use Helper;
    private $_viewparams;

public function __construct(){
    DbFactory::IdiormFactory();
}
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



        # Chargement de la Vue
        $view =   PATH_VIEWS . '/' . $view . '.php';
        if (file_exists($view)):
            # Chargement du Header
            include_once  PATH_HEADER;

            # Chargement de la vue
            include_once $view;

            # Chargement du Footer
            include_once  PATH_FOOTER;
            else :

            $this->$this->render('errors/404',[
                'message'=>'Aucune vue correspondante'
            ]);

         endif;

    }

    protected function renderJson(Array $params){
        header('Content-Type: Application/json');
        echo json_encode($params);
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
    public function debug($params = []){
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