<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:11
 */

namespace application\Model\Article;


use application\Model\Auteur\AuteurDB;
use application\Model\categorie\categorieDB;

class Article extends
{
    private $_IDARTICLE,
            $_IDAUTEUR,
            $_IDCATEGORIE,
            $_TITREARTICLE,
            $_CONTENUARTICLE,
            $_FEATUREDIMAGEARTICLE,
            $_SPECIALARTICLE,
            $_SPOTLIGHTARTICLE,
            $_DATECREATIONARTICLE,
            $_CATEGORIEOBJ,
            $_CATEGORIE;

    public function __construct()
    {
        #l'appel au constructeur se fait de façon automatique de la classe PDO

        $categoriedb = new categorieDB();
        $auteurdb    = new AuteurDB();


    }

    /**
     * @return mixed
     */
    public function getIDARTICLE()
    {
        return $this->_IDARTICLE;
    }

    /**
     * @return mixed
     */
    public function getIDAUTEUR()
    {
        return $this->_IDAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getIDCATEGORIE()
    {
        return $this->_IDCATEGORIE;
    }

    /**
     * @return mixed
     */
    public function getTITREARTICLE()
    {
        return $this->_TITREARTICLE;
    }

    /**
     * @return mixed
     */
    public function getCONTENUARTICLE()
    {
        return $this->_CONTENUARTICLE;
    }

    /**
     * @return mixed
     */
    public function getFEATUREDIMAGEARTICLE()
    {
        return $this->_FEATUREDIMAGEARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPECIALARTICLE()
    {
        return $this->_SPECIALARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPOTLIGHTARTICLE()
    {
        return $this->_SPOTLIGHTARTICLE;
    }

    /**
     * @return mixed
     */
    public function getDATECREATIONARTICLE()
    {
        return $this->_DATECREATIONARTICLE;
    }


}