<?php
/**
 * Nous sommes ici le point d'entrée. En MVC, c'est le front-controller.
 *
 * l'ensemble des requêtes passera par ce controler
 *
 * il a pour mission, de contrôler les demandes de l'utilisateur et d renvoyer la bonne view
 *
 * dans un frame, on utilisera la puissance des requetes via la crea d'un fichier.htaccess
 */
use Core\Core;
# Initialisation du site
require_once 'bootstrap.php';

#frontcontroller

$core = new Core($_GET);

