
<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)) . DS);
define('URL', "http://localhost/Gestor_animales_Fase3/");


require_once "Views/template.php";
require_once "Config\Request.php";
Config\Request::run();

?>
