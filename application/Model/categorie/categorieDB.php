<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 16:36
 */

namespace application\Model\categorie;



use Core\Model\DBtable;

class categorieDB extends DBtable
{
    protected $_table = 'categorie';
    protected $_primary = 'IDCATEGORIE';
    protected $_classToMap = Categorie::class;

}