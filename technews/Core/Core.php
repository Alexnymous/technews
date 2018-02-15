<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 15:07
 */

namespace Core;

use Core\controler\appControler;

class Core extends appControler
{
    public function __construct($params)
    {
        #print_r($params);
        #valeurs par défaut

        if (empty($params)):
            $params['controller'] ='news';
            $params['action'] = 'index';
        endif;
        #Récupération des Paramètres

        $controller = 'application\controler\\'.ucfirst($params['controller']).'Controler';
        $action = $params['action'].'Action';

        #on vérifie l'existance du fichier avant de l'instancier

        if (file_exists(PATH_ROOT . '\\' . $controller . '.php')):

        $obj = new $controller;

            if (method_exists($obj, $action)):
                $obj->$action();

            else:
                $this->render('Error/404', [$message = "cette action n'existe pas"]);

            endif;


        else:

            $this->render('Error/404', [$message = "ce controler n'existe pas"]);

        endif;
//        if ($controler == 'news' && $action == 'index')
//        {
//            echo '<h1> JE SUIS LA PAGE ACCUEIL </h1>';
//        }
//
//        if ($controler == 'news' && $action == 'categorie')
//        {
//            echo '<h1> JE SUIS LA PAGE CATEGORIE </h1>';
//        }
//
//        if ($controler == 'news' && $action == 'article')
//        {
//            echo '<h1> JE SUIS LA PAGE ARTICLE </h1>';
//        }
//
//        if ($controler == 'news' && $action == 'inscription')
//        {
//            echo '<h1> JE SUIS LA PAGE INSCRIPTION </h1>';
//        }
    }
}