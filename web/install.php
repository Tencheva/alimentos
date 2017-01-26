<?php
// creamos la instalación de la base de datos a travez php

include_once("../app/Config.php");
$host=Config::$mvc_bd_hostname;
$user=Config::$mvc_bd_usuario;
$pass=Config::$mvc_bd_clave;

if($c=mysqli_query($c,"CREATE DATABASE IF NOT EXISTS alimentos")){
	echo "se ha conectado LA BASE DE DATO o ya existe  para la aplicacion";
	  }else{
		 echo "ya existe la base de datos"; 
		  }
?>