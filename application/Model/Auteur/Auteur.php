<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:37
 */

namespace application\Model\Auteur;


class Auteur
{
    private $_IDAUTEUR,
            $_NOMAUTEUR,
            $_PRENOMAUTEUR,
            $_EMAILAUTEUR;

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
    public function getNOMAUTEUR()
    {
        return $this->_NOMAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getPRENOMAUTEUR()
    {
        return $this->_PRENOMAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getEMAILAUTEUR()
    {
        return $this->_EMAILAUTEUR;
    }


}