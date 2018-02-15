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
    private $IDTAGS,
            $LIBELLETAGS;

    /**
     * @return mixed
     */
    public function getIDTAGS()
    {
        return $this->IDTAGS;
    }

    /**
     * @param mixed $IDTAGS
     */
    public function setIDTAGS($IDTAGS)
    {
        $this->IDTAGS = $IDTAGS;
    }

    /**
     * @return mixed
     */
    public function getLIBELLETAGS()
    {
        return $this->LIBELLETAGS;
    }

    /**
     * @param mixed $LIBELLETAGS
     */
    public function setLIBELLETAGS($LIBELLETAGS)
    {
        $this->LIBELLETAGS = $LIBELLETAGS;
    }


}