<?php

require_once './conexion_bd.php';
	// capturar información del formulario de busqueda
	$observerClass = new Observer();
	if(isset($_GET['ident'])){
		$obj = $_GET['ident'];
		$observerClass->getUser($mysqli,$obj);
	}else if (isset($_POST['ident'], $_POST['f_name'],$_POST['l_name'],$_POST['age'],$_POST['city'])){
			$obj = $_POST;
			$observerClass->insertUser($mysqli,$obj);
	}else if (isset($_POST['ident'],$_POST['rev'])){
			$obj = $_POST;
			$observerClass->suscribeUser($mysqli,$obj);
	}
	

	class Observer{
	function getUser($mysqli,$obj){
		$queryRevista = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");
		$valores = mysqli_fetch_array($queryRevista);
		if (is_array($valores)==false){
			echo "No estas registrado, por favor registrate antes de realizar una suscripción";
			return false;
		}else{
			echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado <br/>";
			return true;
		}
	}

	function insertUser($mysqli, $obj){
		if(count($obj) >0 and $obj['ident'] != 0 and $obj['f_name'] != "" and $obj['l_name'] != "" and $obj['age'] != 0 and $obj['city'] != null){
			$id = $obj['ident'] ;
			$f_n = $obj['f_name'];
			$l_n = $obj['l_name'];
			$age =  $obj['age'];
			$citcod = $obj['city'];
			$sql = "INSERT INTO usuario (id_usuario, nombre, apellido, edad, cod_ciudad) VALUES ('$id', '$f_n', '$l_n', '$age', '$citcod');";
			mysqli_query($mysqli,$sql);
			echo "Usted se ha registrado con exito!";
		}else{
			echo "Todos los campos son obligatorios";
		}
	}

	function suscribeUser($mysqli, $obj){
		if(count($obj)>0){
			$one = $obj['ident'];
			if($this->getUser($mysqli,$one)){
				$two = $obj['rev'];
				$verify = "SELECT id_usuario, id_revista FROM suscriptores WHERE id_usuario =".$one." and id_revista= ".$two."";
				if ($verify == null){
					$sql = "INSERT INTO suscriptores (id_usuario,id_revista) VALUES ('$one','$two');";
					mysqli_query($mysqli,$sql);
					echo "Usted se ha suscrito con exito!";
				}else{
					echo "Ya se encuentra suscrito a esta revista.";
				}
			}
		}
	}
}
?>