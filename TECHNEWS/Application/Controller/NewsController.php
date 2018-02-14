<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13/02/2018
 * Time: 11:44
 */

namespace Application\Controller;


use Application\Model\Article\ArticleDb;
use Application\Model\Auteur\AuteurDb;
use Application\Model\Categorie\CategorieDb;
use Application\Model\Tags\TagsDb;
use Core\Controller\AppController;

# Une classe peut hériter que d'une seule classe

class NewsController extends AppController
{
    public function indexAction(){
        $this->render('news/index',['titre' => 'Webforcre3 Rouen !']);

        # include_once PATH_VIEWS.'news/index.php';
    }

    public function categorieAction(){
        $categorieDb    =   new CategorieDb;
        $categories      =   $categorieDb->fetchAll();
        $this->render('news/categorie', ['categories'=>$categories]);
    }

    public function articleAction(){
        $articleDb      = new ArticleDb;
        $article        = $articleDb->fetchAll();
        $this->render('news/article',['article'=>$article]);
    }

    public function auteurAction(){
        $auteurDb      = new AuteurDb;
        $auteur       = $auteurDb->fetchAll();
        $this->render('news/auteur',['auteur'=>$auteur]);
    }

    public function tagsAction(){
        $tagsDb      = new TagsDb;
        $tags        = $tagsDb->fetchAll();
        $this->render('news/tags',['tags'=>$tags]);
    }


}