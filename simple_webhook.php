<?php
if ( isset($_POST) ) { if (!empty($_POST) ) {
		
		$request = file_get_contents('php://input');
		$req_dump = print_r( $request, true );
		$fp = file_put_contents( 'request.log', $req_dump );
		
		header("HTTP/1.1 200 OK");
		http_response_code(201);
		header("Status: 200 All rosy");
	
}}
	
?>