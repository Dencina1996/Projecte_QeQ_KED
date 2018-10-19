              /*$Config = Arxiu("Config.txt");
              $Imatges = Arxiu("Imatges.txt");

              $xxx = $Config[0];
              echo $xxx;
              $prueba = str_split($xxx);

              echo $prueba;

              echo $Config[0]."<br>";
              echo $Config[1]."<br>";
              echo $Config[2]."<br>";

              echo $Imatges[0]."<br>";
              echo $Imatges[1]."<br>";
              echo $Imatges[2]."<br>";
              echo $Imatges[3]."<br>";
              echo $Imatges[4]."<br>";


              echo "<br>";
              echo "<br>";
              echo "<br>";
              echo "<br>";
              echo "<br>";         
              echo $prueba;
*/


		/* while (!feof($Arxiu)) { 
    		if ($Linea = fgets($Arxiu)){ 
       			$Texto = $Linea;
       			echo "---------------------------------------------------------------------------";
       			echo $Texto."<br>";
       			echo "---------------------------------------------------------------------------";
       			$Num_Lineas++;
       			//$Var[$Contador++] = array();
       			// array_push($Array1, $Texto);
       			
       			echo $Texto."<br>";
       			/*$Texto2 = explode(":", $Texto);
       			//array_push($Array, $Texto2);


       			foreach ($Texto2 as $key => $value) {
       				echo $key.$value;
       				echo "<br>";
       			}
       			// array_push($Array,$Texto,split(":",$Linea,4));
       		}
       	}
       	
       	*/

       	echo "<br>";
       	echo "<br>";
       	echo "<br>";
       	echo "<br>";
       	echo "<br>";


       	for ($Contador = 0; $Contador > $Num_Lineas; $Contador++) {

       		echo fgets($Arxiu)."<br>";

       	}
       	echo "<p>safsdf</p>";
       	
       /*	echo gettype($Var[2])."<br>";
       	var_dump($Array1);
       	echo "<p>safsdf</p>";
       	echo $Num_Lineas;
       	
       	echo $ll = count($Array);

       	$sex = array_values($Array);	

       	/*foreach ($Array as $key => $value) {
       		
       		echo $Array[$value];

       	}
*/
       	fclose ($Arxiu);

	/*
		while(!feof($Arxiu)) {
			for (i<$)
			echo fgets($Arxiu). "<br />";

		}

		fclose($Arxiu);
*/
