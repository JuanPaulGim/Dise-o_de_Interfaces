<?php
	
	function checkLetter($num){
		if($num == 10){
			return "A";
		}
		else if($num == 11){
			return "B";
		}
		else if($num == 12){
			return "C";
		}
		else if($num == 13){
			return "D";
		}
		else if($num == 14){
			return "E";
		}
		else if($num == 15){
			return "F";
		}else{
			return $num;
		}
	}

	function checkRange($num){
		if ($num < 0)
			return 0;
	 	if ($num > 255)
	 		return 255;
	 	return $num;
	}

	function hexrgb($R,$G,$B){
		echo "RGB: ".$R." ".$G." ".$B."<br/>";
		$R = checkRange($R);
		$G = checkRange($G);
		$B = checkRange($B);
		$r = intval($R/16);
		$g = intval($G/16);
		$b = intval($B/16);
		//Paso 2
		$dr = $R-($r*16);
		$dg = $G-($g*16);
		$db = $B-($b*16);
		$arreglo = array($r,$g,$b,$dr,$dg,$db);
		for($i = 0; $i < sizeof($arreglo); $i++){
			$arreglo[$i] = checkLetter($arreglo[$i]);
		}
		echo "Hexadecimal: "."#".$arreglo[0].$arreglo[3].$arreglo[1].$arreglo[4].$arreglo[2].$arreglo[5];
	}

	$print = hexrgb(250,250,250);
?>
