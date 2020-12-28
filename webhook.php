

<?php
  // Recuperar el cuerpo de la solicitud y analizarlo como JSON
  $input = file_get_contents("php://input");
  $event_json = json_decode($input);

  // Escribir el Webhook en mi archivo "log/log-webhooks.json" de ejemplo
  $myfile = fopen("log/log-webhooks.json", "w")
  or die("Imposible abrir el archivo.");
  fwrite($myfile, $input);

  //Respuesta a MercadoPago
  http_response_code(200);
  $array = array(
    "response" => "Webhook de MercadoPago recibido"
  );
  echo json_encode($array);));
?>

