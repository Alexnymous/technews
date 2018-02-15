<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 15:55
 */

namespace Core\Model;


abstract class DBtable
{
    # Nom de la Table
    protected $_table;
    # Clé Primaire
    protected $_primary;
    # Classe à Mapper
    protected $_classToMap;
    # Instance PDO, Objet PDO, BDD
    private $_db;
    public function __construct()
    {
        # Je récupère l'instance de PDO
        $this->_db = DBFactory::PdoFactory();
    }

    /**
     * Récupère un enregistrement
     * @param string $where
     * @param string $orderby
     * @param string $limit
     * @param string $offset
     */

    public function fetchAll() {
        $where      = '';
        $orderby    = '';
        $limit      = '';
        $offset     = '';

        $sql = "SELECT * FROM " . $this->_table;
//
//        # si $where != '' alors inclue
//
//        if ($where != ''):
//            $sql.= 'where' . $where;
//        endif;

        !empty($where)   ?    $sql  .= 'WHERE'      . $where    :  null;
        !empty($orderby) ?    $sql  .= 'ORDERBY'    . $orderby  :  null;
        !empty($limit)   ?    $sql  .= 'LIMIT'      . $limit    :  null;
        !empty($offset)  ?    $sql  .= 'OFFSET'     . $offset   :  null;

        $sth = $this->_db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(
            \PDO::FETCH_CLASS,$this->_classToMap
        );
    }

    public function fetchOne($search, $column = '') {
        empty($column) ? $column = $this->_primary : null;
        $sth = $this->_db->prepare(
            'SELECT * FROM ' . $this->_table
            . ' WHERE ' . $column . ' = :search');
        $sth->bindValue(':search',
            $search, \PDO::PARAM_STR);
        $sth->execute();
        $sth->setFetchMode(\PDO::FETCH_CLASS,
            $this->_classToMap);
        return $sth->fetch();
    }
}