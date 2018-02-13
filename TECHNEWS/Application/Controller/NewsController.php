<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 11:44
 */

namespace Application\Controller;


use Application\Model\Categorie\CategorieDb;
use Core\Controller\AppController;

# Une classe peut hériter que d'une seule classe

class NewsController extends AppController
{
    public function indexAction(){
        $categorieDb    =   new CategorieDb;
        $categories      =   $categorieDb->fetchAll();


            $this->render('news/index', ['categories'=>$categories]);

        # include_once PATH_VIEWS.'news/index.php';
    }

    public function categorieAction(){
        $this->render('news/categorie',[
            'categorie' => 'UNE CATEGORIE WOW !'
        ]);
    }

    public function articleAction(){
        $this->render('news/article',[
            'article' => 'UN ARTICLE WOW !'
        ]);
    }
}