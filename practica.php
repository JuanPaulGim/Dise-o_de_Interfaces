<?php
	$entero = 10;
	$float = 12.34;
	$string = "clase HCI";
	$array = array("key1","hola","key2","mundo");
	$array2 = array("key1" => "hola","key2" => "mundo");
	$verdadero = true;
	$falso = false;

	class StrValTest{
		private $miVar = "clase1";
		public $miVar2 = "clase2";
		public function __toString(){
			return __CLASS__;
		}
		public function example(){
			return "esto es una prueba";
		}
	}
	echo "entero " . intval($entero) ."<br />";
	echo "float ".intval($float). "<br />";
	echo "string ".intval($string). "<br />";
	echo "boolean verdadero ".intval($verdadero). "<br />";
	echo "boolean flaso ".intval($falso). "<br />";
	echo "hex-dec ".intval(0x165).'<br/>';
	echo "float string ".strval($float).'<br/>';
	$floatString = strval($float);
	echo gettype($floatString).'<br/>';
	echo "falso string ".intval($falso).'<br/>';
	echo "verdadero string ".intval($verdadero).'<br/>';
	echo "class string ".strval(new StrValTest).'<br/>';

	echo "array int ".(int)$array2.'<br/>';
	echo "array float ".(float)$array2.'<br/>';
	echo var_dump((array)new StrValTest()).'<br/>';
	echo var_dump((object)$float).'<br/>';
?>
