<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 12:36
 */

namespace Core\controler;


class appControler
{
    private $_viewparams;

    /**
     * Permet de générer l'affichage
     * @param $view
     * @param array $viewparam
     *
     */
    protected function render($view, array $viewparam=[]){

        #Récupération et affectation des Params de la View

        $this->_viewparams = $viewparam;

            #chargement du header
        include_once PATH_HEADER;


            #Permet d'accéder au tableau directement
        extract($this->_viewparams);

            #chargment du contenu du visiteur

        include_once PATH_VIEW . '/' . $view . '.php';


            #chargement du header
        include_once PATH_FOOTER;

    }

    /**
     * renvoie tableau de param de la view
     * @return mixed
     */
    public function getViewparams()
    {
        $bject = new \ArrayObject ($this->_viewparams);
        $bject->setFlags(\ArrayObject::ARRAY_AS_PROPS);
        return $bject;
    }

    /**
     * @param array $params
     */
    public function debug(Array $params = []){
        if (empty($params)) :
            $params = $this->_viewparams;
        endif;

        echo '<pre>';
        print_r($params);
        echo '</pre>';
    }

    public function getAction(){
        empty($_GET['action']) ? 'accueil' : $_GET['action'];
    }
}