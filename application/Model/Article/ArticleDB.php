<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:12
 */

namespace application\Model\Article;

use Core\Model\DBTable;
class ArticleDB extends DBtable
{
    protected $_table       ='article';
    protected $_primary     = 'IDARTICLE';
    protected $_classToMap  = Article::class;
}