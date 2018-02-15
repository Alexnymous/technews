<?php
#Quelques constantes utiles

define('PATH_ROOT', dirname(__DIR__));
define('PATH_PUBLIC', '/WF3ROUEN/technews/public/');
define('PATH_APPLICATION', PATH_ROOT.'/application');
define('PATH_LAYOUT', PATH_APPLICATION. '/layout');
define('PATH_VIEW', PATH_APPLICATION.'/views');
define('PATH_HEADER', PATH_LAYOUT.'/header.inc.php');
define('PATH_SIDEBAR', PATH_LAYOUT.'/sidebar.inc.php');
define('PATH_FOOTER', PATH_LAYOUT.'/footer.inc.php');
define('DBHOST','localhost');
define('DBNAME','technews');
define('DBUSER','root');
define('DBPASSWORD','');



#chargement de l'autoload

require_once ('autoloader.php');
autoloader::register();