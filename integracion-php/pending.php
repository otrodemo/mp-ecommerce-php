<?php
//print_r(json_decode($_POST)); //var_dump($_POST);

	if ( isset($_GET) ) { if (!empty($_GET) ) {
		
		echo "<h1>El pago está pendiente.</h1>";
		
		echo "<br><br> Acercate a realizar el pago para proseguir con tu compra.";
		
		echo  "<br><br>Resumen: <br><br>";
		
		print_r(json_decode($_GET));
			

		
	}}

?>