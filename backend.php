<?php

require_once './conexion_bd.php';
	// capturar información del formulario de busqueda
	$observerClass = new Observer;
	if(isset($_GET['ident'])){
		$obj = $_GET['ident'];
		$observerClass->getUser($mysqli,$obj);
	}

	class Observer{
	function getUser($mysqli,$obj){
		$queryRevista = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");
		$valores = mysqli_fetch_array($queryRevista);
		if (is_array($valores)==false){
			echo "No estas registrado, por favor registrate antes de realizar una suscripción";
		}else{
			if(isset($_GET['ident'])){
				echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
			}
		}
		#return fetch_array;
	}

	function insertUser($mysqli, $obj){}

	function suscribeUser($mysqli, $obj){}
}
?>