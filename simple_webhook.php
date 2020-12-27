<?php
if ( isset($_POST) ) { if (!empty($_POST) ) {
	
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			
			$fopen = fopen("request_log.txt","a+");
			fwrite($fopen, var_export($_POST, true). "\n" .  date('Y-m-d H:i:s', time()).PHP_EOL . "\n\n" );
			fclose($fopen);
			
			//file_put_contents("post.log", file_get_contents("post.log")."\n\n". var_export($_GET, true));
/*
			$raw_payload = file_get_contents('php://input');
			$payload = json_decode($raw_payload, true);

			if (is_array($payload)) {
				$fh = fopen("log.txt", "a+");

				if ($fh) {
					fwrite($fh, date('Y-m-d H:i:s', time()).PHP_EOL);
					fclose($fh);
				} else {
					trigger_error("Unable to open file!");
				}
			} else {
				trigger_error("Invalid payload!");
			}
		} else {
			trigger_error("Invalid request!");
		}//*/
		
		}
		/*
		$request = file_get_contents('php://input');
		$req_dump = print_r( $request, true );
		$fp = file_put_contents( 'request.log', $req_dump );
		///*/
		
		header("HTTP/1.1 200 OK");
		http_response_code(201);
		header("Status: 200 All rosy");
	
}}
	
?>