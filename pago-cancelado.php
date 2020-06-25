<?php 
    $host = 'https://' . $_SERVER["HTTP_HOST"];
    $url= $host . $_SERVER["REQUEST_URI"];

    echo '{' . $url . '}';
?>
