<?php
class Autoloader {
    public static function register() {
        // fonction statique : on peut appeler la fonction sans instancier la classe
        // elle est déconnectée de l'objet et appartient à la classe
        // les fonctions statiques ne peuvent appeler que des fonctions statiques.
        // le mot clé self -> fait référence la classe statique
        // le mot clé this -> fait référence à l'objet
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class) {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        echo 'Autoload : ';
        print_r($class);
        echo '<br>';
        echo '<br>';
        require PATH_ROOT . '/' .$class . '.php';
    }
}