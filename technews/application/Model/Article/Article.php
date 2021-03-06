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

class Article
{
    private $IDARTICLE,
            $IDAUTEUR,
            $IDCATEGORIE,
            $TITREARTICLE,
            $CONTENUARTICLE,
            $FEATUREDIMAGEARTICLE,
            $SPECIALARTICLE,
            $SPOTLIGHTARTICLE,
            $DATECREATIONARTICLE,
            $CATEGORIEOBJ,
            $AUTEUROBJ;

    public function __construct()
    {
        #l'appel au constructeur se fait de façon automatique de la classe PDO

        $categoriedb = new categorieDB();
        $auteurdb    = new AuteurDB();

        $this->AUTEUROBJ = $auteurdb->fetchOne($this->IDAUTEUR);
        $this->CATEGORIEOBJ = $categoriedb->fetchOne($this->IDCATEGORIE);
    }

    /**
     * @return mixed
     */
    public function getIDARTICLE()
    {
        return $this->IDARTICLE;
    }

    /**
     * @return mixed
     */
    public function getIDAUTEUR()
    {
        return $this->IDAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return mixed
     */
    public function getTITREARTICLE()
    {
        return $this->TITREARTICLE;
    }

    /**
     * @return mixed
     */
    public function getCONTENUARTICLE()
    {
        return $this->CONTENUARTICLE;
    }

    /**
     * @return mixed
     */
    public function getFEATUREDIMAGEARTICLE()
    {
        return $this->FEATUREDIMAGEARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPECIALARTICLE()
    {
        return $this->SPECIALARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPOTLIGHTARTICLE()
    {
        return $this->SPOTLIGHTARTICLE;
    }

    /**
     * @return mixed
     */
    public function getDATECREATIONARTICLE()
    {
        return $this->DATECREATIONARTICLE;
    }

    public function getFULLIMAGEARTICLE() {
        return PATH_PUBLIC . '/images/product/' .
            $this->FEATUREDIMAGEARTICLE;
    }

    public function getACCROCHEARTICLE() {
        # Supprimer toutes les balises HTML
        $string = strip_tags($this->CONTENUARTICLE);

        # Si ma chaine de caractère est supérieur à 170
        # Je poursuis, sinon c'est inutile...

        if(strlen($string) > 170) :
            # Je coupe ma chaine à 170
            $stringCut = substr($string, 0, 170);

            # Je m'assure de ne pas couper de mot !
            $string = substr($stringCut, 0, strrpos($stringCut, ' '));

        endif;
        return $string . '...';
    }

    /**
     * @return mixed
     */
    public function getCATEGORIEOBJ()
    {
        return $this->CATEGORIEOBJ;
    }

    /**
     * @return mixed
     */
    public function getAUTEUROBJ()
    {
        return $this->AUTEUROBJ;
    }




}