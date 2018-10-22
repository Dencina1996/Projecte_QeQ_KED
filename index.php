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

		// Apertura del archivo

		$Arxiu = "Imatges.txt";
		$Contenido = file($Arxiu);

		// Bucle / Inserción de datos Array

		foreach($Contenido as $Linea) {
		$Clean = str_replace(":", "", $Linea);
		$Clean2 = str_replace(",", "", $Clean);
		$Clean3 = explode(" ", $Clean2);
		array_push($Array, $Clean3);
		}

		// Bucle Imágenes al HTML

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