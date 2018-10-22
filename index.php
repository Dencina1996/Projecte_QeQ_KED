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
		
		print_r($Array);
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

	print_r($Array[0][0]);



	for ($i=0;$i<=11;$i++) {
	echo "<table>";
		echo "<tr>";
   			echo "<td>";

   				echo '<img src="Images/'.$Array[$i][0].'" ulleres="'.$Array[$i][2].'" cabell="'.$Array[$i][4].'" 
   				sexe="'.$Array[$i][6].'" width="150" height="150">';
   				echo "<p>".$Array[$i][2]."</p>";
   				echo "<p>".$Array[$i][4]."</p>";
   				echo "<p>".$Array[$i][6]."</p>";
			echo "</td>";
    	echo "</tr>";
    echo "</table>";
	}
    








	?>
</body>
</html>