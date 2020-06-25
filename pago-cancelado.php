<?php 
    $entityBody = file_get_contents('php://input');
    
    echo json_decode($entityBody);
?>
