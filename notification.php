<?php

    require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken('APP_USR-8058997674329963-062418-89271e2424bb1955bc05b1d7dd0977a8-592190948');

    $entityBody = file_get_contents('php://input');

    $fichero = './clientes.json';

    $actual = file_get_contents($fichero);

    $actual .= $entityBody;

    file_put_contents($fichero, $actual);
?>