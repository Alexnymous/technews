<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:24
 */

namespace application\Model\Tags;

use Core\Model\DBtable;
class TagsDB
{
    protected $_table = 'tags';
    protected $_primary = 'IDTAGS';
    protected $_classToMap = Tags::class;
}