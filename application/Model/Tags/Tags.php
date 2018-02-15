<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:24
 */

namespace application\Model\Tags;


class Tags
{
    private $_IDTAGS,
            $_LIBELLETAGS;

    /**
     * @return mixed
     */
    public function getIDTAGS()
    {
        return $this->_IDTAGS;
    }

    /**
     * @param mixed $IDTAGS
     */
    public function setIDTAGS($IDTAGS)
    {
        $this->_IDTAGS = $IDTAGS;
    }

    /**
     * @return mixed
     */
    public function getLIBELLETAGS()
    {
        return $this->_LIBELLETAGS;
    }

    /**
     * @param mixed $LIBELLETAGS
     */
    public function setLIBELLETAGS($LIBELLETAGS)
    {
        $this->_LIBELLETAGS = $LIBELLETAGS;
    }


}