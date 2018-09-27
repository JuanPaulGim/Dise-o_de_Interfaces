<?php

require_once './conexion_bd.php';
	
	// capturar información del formulario de busqueda
	if(isset($_GET['ident'])){
		$obj = $_GET['ident'];
		$observerClass->getUser($mysqli,$obj);
	}

	class observerClass{
	function getUser(){

		$queryRevista = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

		sql_fetch_array($queryRevista);
		if(isset($_GET['ident'])){
			if(count($valores) > 0){
				echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
			}else{
				echo "No estas registrado, por favor registrate antes de realizar una suscripción";
			}
		}

		return fetch_array;
	}

	function insertUser($mysqli, $obj){}

	function suscribeUser($mysqli, $obj){}
}
?>