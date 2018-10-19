<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>¿Quién es quién?</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script type="text/javascript" defer src="scripts.js"></script>
</head>
<body>
	<?php

		// LA Array

		$Array = array();
	
		// Array por Elementos

		$ArrayImatges = [];
		$ArrayGafas = [];
		$ArrayCabell = [];
		$ArraySexe = [];	

		$Num_Lineas = 0;

		$Arxiu = "Imatges.txt";
		$Contenido = file($Arxiu);

		foreach($Contenido as $Linea) {
		$Clean = str_replace(":", "", $Linea);
		$Clean2 = str_replace(",", "", $Clean);
		$Clean3 = explode(" ", $Clean2);
		array_push($Array, $Clean3);
		}
		
		print_r($Array[10]);

		
		foreach( $Array as $key => $value) { 
				
		array_push($ArrayImatges, $value[0]);
		array_push($ArrayGafas, $value[2]);
		array_push($ArrayCabell, $value[4]);
		array_push($ArraySexe, $value[6]);

		}
	print_r($ArrayImatges);
	echo "<br>";
	print_r($ArrayGafas);
	echo "<br>";
	print_r($ArrayCabell);
	echo "<br>";
	print_r($ArraySexe);
	echo "<br>";

	$ImagenesUtilizadas = [];
	//for ($i=0;$i<=11;$i++) {
	echo "<table>";
		$y=0;
		for ($i=0; $i < 3; $i++) {
        	echo "<tr>";
        	for ($x=0; $x < 4; $x++) {

         		$RandomTablero = array_rand($ArrayImatges);
				if(in_array($RandomTablero, $ImagenesUtilizadas)){
            		$x-=1;
   				}else{
   					echo "<td>";
   					echo "<img src='Images/ArrayImatges' width='150' height='150'>";
   					$y+=1;
   				}
				echo "</td>";
    		}
    		echo "</tr>";
		}
    echo "</table>";
	?>
</body>
</html>