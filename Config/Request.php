<?php namespace Config;

class Request{
private $controlador;
private $metodo;
private $argumento;


public function run(){
if(isset($_GET['url'])){
	$ruta= filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
	$ruta= explode("/",$ruta);
	$ruta= array_filter($ruta);
//print_r($ruta);

$controlador=strtolower(array_shift($ruta));
//print_r ($this->controlador);
$metodo=strtolower(array_shift($ruta));

//print_r ($this->metodo);
$argumento=$ruta;

//print_r ($this->argumento);
}else{
	$controlador="fincas";
	$metodo="index";
}

$ruta = ROOT . "Views" . DS . $controlador . DS . $metodo . ".php";
if(is_readable($ruta)) {
	require_once $ruta;
}else{
	print "No se encontro la ruta";
}
}

}




?>