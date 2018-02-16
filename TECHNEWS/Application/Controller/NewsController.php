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
use Core\Model\DbFactory;
use Core\Model\ORM;

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

    public function idiormAction(){
        # Récupération des Catégories
        DbFactory::IdiormFactory();
        $categories = ORM::for_table('categorie')
            ->find_result_set();

        foreach($categories as $categorie) :
            echo $categorie->LIBELLECATEGORIE . '<br>';
        endforeach;

        # Afficher la liste des Auteurs du site dans un Tableau HTML
        $auteurs = ORM::for_table('auteur')
        ->find_result_set();

        echo '<hr><table border="1">';

            foreach ($auteurs as $auteur) :
                echo '<tr>';
                    echo '<td>' . $auteur->IDAUTEUR . '</td>';
                    echo '<td>' . $auteur->NOMAUTEUR . '</td>';
                    echo '<td>' . $auteur->PRENOMAUTEUR . '</td>';
                    echo '<td>' . $auteur->EMAILAUTEUR . '</td>';
                echo '</tr>';
            endforeach;

        echo '</table>';

    }
    public function articleAction(){
        # http://localhost/technews/article/18-leslug.html

        $idarticle = $_GET['idarticle'];
        $article        = ORM::for_table('article')->find_one($idarticle);
        $tags           = ORM::for_table('tags')->where('IDTAGS', $idarticle)->find_result_set();
        $suggestions    = ORM::for_table('article')->where('IDCATEGORIE', $article->IDCATEGORIE)->limit(4)->find_result_set();
        $auteur         = ORM::for_table('auteur')->where('IDAUTEUR',$article->IDAUTEUR)->find_one();
        $this->render('news/article',['article'=>$article,'tags'=>$tags,'suggestions'=>$suggestions,'auteur'=>$auteur]);
        # Récupération de l'Article

        # Récupération des Articles de la Catégorie (suggestions)

        # Je récupère uniquement, les articles de la même
        # catégorie que mon article

        # Sauf mon article en cours

        # 3 articles maximum

        # Par ordre décroissant

        # Je récupère les résultats

        # Transmission à la Vue.

        //$this->render('news/article');
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

