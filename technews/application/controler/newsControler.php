<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 10:54
 */

namespace application\controler;


use application\Model\Article\ArticleDB;
use application\Model\categorie\categorieDB;
use Core\controler\appControler;

class newsControler extends appControler
{
    public function indexAction(){
        $articleDb = new ArticleDB();
        $articles = $articleDb->fetchAll();
        $spotlight = $articleDb->fetchAll('SPOTLIGHTARTICLE = 1');

        $this->render('news/index',['articles'=>$articles,'spotlight'=>$spotlight]);
        #include_once PATH_VIEWS. '/news/index.php';
    }
    public function categorieAction(){
        $this->render('News/categorie', ['categorie' => 'WF3 Rouen']);
        //echo 'je suis categorieAction';
    }
    public function articleAction (){
        $this->render('News/article');
        //echo 'je suis articleAction';
    }
     public function tagsAction(){
        $TagsDb = new TagsDB();
        $Tags   = $TagsDb->fetchAll();
        $this->render('new/tags', ['tags' =>$Tags]);
    }
    public function businessAction(){
        $articleDb = new ArticleDB();
        $article= $articleDb->fetchAll('IDCATEGORIE = 2');
        $this->render('news/categorie', ['articles' => $article]);
    }
    public function compuctingAction(){
        $articleDb = new ArticleDB();
        $article= $articleDb->fetchAll('IDCATEGORIE = 3');
        $this->render('news/categorie', ['articles' => $article]);
    }
    public function techAction(){
    $articleDb = new ArticleDB();
    $article= $articleDb->fetchAll('IDCATEGORIE = 4');
    $this->render('news/categorie', ['articles' => $article]);
}


    public function auteurAction(){
        $AuteurDb = new AuteurDB();
        $Auteur   = $AuteurDb->fetchAll();
        $this->render('news/auteur', ['auteur' => $Auteur]);
    }

}