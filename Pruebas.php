<!DOCTYPE html>
<html>
<head>
	<title>PEPITO</title>
</head>
<body>

<?php

	$lineas = file('Config.txt');
	foreach ($lineas as $num_linea => $linea) {
		echo "Linea #{$num_linea}: ".htmlspecialchars($linea)."<br>"."\n";
	}
?>

</body>
</html>