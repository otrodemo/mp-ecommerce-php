<?php
//print_r(json_decode($_POST)); //var_dump($_POST);

	if ( isset($_GET) ) { if (!empty($_GET) ) {
		
		echo "<h1>¡Ups! Algo salió mal.</h1>";
		
		echo  "<br><br>Revisa si tienes saldo en tu tarjeta, si está habilitada para compras online o si está activa. ";
		echo "<br>Asimismo verifica que todos los datos que hayas ingresados sean válidos. <br>";
		
		echo  "<br><br>Resumen: <br><br>";
		
		print_r(json_decode($_GET));
			

		
	}}

?>