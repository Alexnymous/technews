<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 15:42
 */

namespace Core\Model;


class DBFactory
{
    public static function PdoFactory() {
        # Création d'une connexion PDO
        $pdo = new \PDO('mysql:host='.DBHOST.';dbname='.DBNAME,
            DBUSER,DBPASSWORD);
        # Gestion des erreurs : http://php.net/manual/fr/pdo.error-handling.php
        $pdo->setAttribute(\PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION);
        # On retourne $pdo
        return $pdo;
    }
}