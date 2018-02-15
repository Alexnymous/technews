<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 10:54
 */

namespace application\Controler;


use application\Model\categorie\categorieDB;
use Core\controler\AppControler;

class NewsControler extends AppControler
{
    public function indexAction(){
        $this->render('News/index', ['titre' => 'WF3 Rouen']);

//        include_once PATH_VIEW.'/index.php';
    }
    public function categorieAction(){
        $this->render('News/categorie', ['categorie' => 'WF3 Rouen']);
        //echo 'je suis categorieAction';
    }
    public function articleAction (){
        $this->render('News/article', ['article' => 'WF3 Rouen']);
        //echo 'je suis articleAction';
    }
}