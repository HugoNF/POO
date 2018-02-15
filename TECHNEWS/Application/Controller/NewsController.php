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
        # Connexion à la BDD
        $articleDb = new ArticleDb;

        # Récupération des Articles
        $articles = $articleDb->fetchAll();

        # Récupération des Articles en Spotlight
        $spotlight = $articleDb->fetchAll('SPOTLIGHTARTICLE = 1');

        $this->render('news/index',[
            'articles'=>$articles, 'spotlight'=>$spotlight
        ]);


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

    public function businessAction(){
        $articleDb= new ArticleDb();
        $articles = $articleDb->fetchAll('IDCATEGORIE = 2', '','3');
        $this->render('news/categorie',['articles'=>$articles]);
    }
    public function computingAction(){
        $articleDb= new ArticleDb();
        $articles = $articleDb->fetchAll('IDCATEGORIE = 3', '','3');
        $this->render('news/categorie',['articles'=>$articles]);
    }
    public function techAction(){
        $articleDb= new ArticleDb();
        $articles = $articleDb->fetchAll('IDCATEGORIE = 4', '','3');
        $this->render('news/categorie',['articles'=>$articles]);
    }

    public function enfantsAction(){
        $articleDb= new ArticleDb();
        $articles = $articleDb->fetchAll('IDCATEGORIE = 5', '','3');
        $this->render('news/categorie',['articles'=>$articles]);
    }
}