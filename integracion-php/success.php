<?php
//?collection_id=12815642291&collection_status=approved&payment_id=12815642291&status=approved&external_reference=null&payment_type=credit_card&merchant_order_id=2148733168&preference_id=677408439-cebfde58-f009-4c33-8a5c-aae52079556d&site_id=MPE&processing_mode=aggregator&merchant_account_id=null

//print_r(json_decode($_POST)); //var_dump($_POST);

	if ( isset($_GET) ) { if (!empty($_GET) ) {
		
		echo "<h1>¡Felicidades! Tu compra ha sido realizada con éxito.</h1>";
		
		echo  "<br><br>Resumen de compra: <br>";
		
		
		echo "<br><b>Id de Orden:</b> " . $_GET['merchant_order_id'];
		echo "<br><b>Tipo de pago:</b> " . $_GET['payment_type'];
		echo "<br><b>Referencia Externa:</b> " . $_GET['external_reference'];
		echo "<br><b>Id de pago:</b> " . $_GET['payment_id'];
		
		echo "<br><br><br><br> Más información: <br><br>";
		//print_r(json_decode($_GET));
		print_r($_GET);
			

		
	}}

?>