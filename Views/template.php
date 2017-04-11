<?php namespace Views;

	$template = new template();

	class template{

		public function __construct(){
?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Gestor de animales</title>
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/lavish-bootstrap.css">
		<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">
	</head>
	<body >
		<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Gestor de eventos animales</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo URL; ?>">Inicio</a></li>

               <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Municipios <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>municipios/index">Listado</a></li>
		            <li><a href="<?php echo URL; ?>municipios/agregar">Crear</a></li>
		          </ul>
		        </li>


               <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Fincas <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>fincas/listado">Listado</a></li>
		            <li><a href="<?php echo URL; ?>fincas/agregar">Crear</a></li>

		          </ul>
		        </li>
		        
              <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Animales <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		          
		            <li><a href="<?php echo URL; ?>animales/agregar">Crear</a></li>

		          </ul>
		        </li>
		        
		        <!--
		       <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Producción de leche <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		           
		            <li><a href="<?php echo URL; ?>leche/agregar">Crear</a></li>
		          </ul>
		        </li>

		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pesajes <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		           
		            <li><a href="<?php echo URL; ?>pesajes/agregar">Crear</a></li>
		          </ul>
		        </li>
		        -->

		        
		      </ul>

		        <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuario <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			           
			            <li><a href="<?php echo URL; ?>usuarios/nuevo_usuario">Nuevo</a></li>
			            <li><a href="<?php echo URL; ?>usuarios/buscar_usuario">Buscar</a></li>
			          </ul>
			        </li>	
		        <li><a href="<?php echo URL; ?>animales/acerca">Acerca de</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
<?php
		}

		public function __destruct(){
?>
	<footer  class="navbar-fixed-bottom">
	    Gestor de eventos animales <br>
		Programación de sitios web <br>
		Grupo 42 | <b>Universidad Nacional Abierta y a Distancia</b>
	</footer>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script>
	</body>
	</html>
<?php
		}

	}

?>