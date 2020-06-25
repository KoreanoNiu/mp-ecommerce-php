<?php

    require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken('APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948');

    $opciones = array(
        'http'=>array(
          'method'=>"POST"
        )
    );

    $contexto = stream_context_create($opciones);

    $entityBody = file_get_contents('php://input', false, $contexto);

    $data = json_decode($entityBody, TRUE);

    $json_string = json_encode($data);
    $file = './clientes.json';
    file_put_contents($file, $json_string);

    echo $json_string;
    echo $data;
?>