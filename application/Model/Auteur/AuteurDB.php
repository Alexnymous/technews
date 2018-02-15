<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:37
 */

namespace application\Model\Auteur;

use Core\Model\DBtable;
class AuteurDB extends DBtable
{
    protected $_table       = 'auteur';
    protected $_primary     = 'IDAUTEUR';
    protected $_classToMap  = Auteur::class;
}