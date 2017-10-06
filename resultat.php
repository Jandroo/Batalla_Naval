<!DOCTYPE html>

<html>

<head>

	<title>Battala Naval</title>

	<style>

		body{
			margin:0 auto;
		}

		td{
			border: 1px solid black;
			height: 20px;
			width: 20px;
		}
		.color{
			background-color: black;
		}

	</style>

</head>


<body>

	<?php

		$filas = $_POST["filas"];
	    $celdas = $_POST["celdas"];
	    $letras = ["","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

	    echo "<table>";

	    for( $i=0; $i<=$filas; $i++ ) { 
	        echo "<tr></tr>\n";
	        for($j=1; $j<=$celdas+1; $j++) {

	        	if($j>$celdas){
	        		echo "<tr></tr>\n";
	        	}

	        	else if (($i % 2 == 0 && $j % 2 == 0)|($i % 2 != 0 && $j % 2 != 0)){
	        		echo "<td class='color'></td>\n";
	        	}

	        	else{
	        		echo "<td></td>\n";
	        	}

	       }
	   }

	   echo "</table>";

	?>

</body>

</html>