<?php

    // Configurações para que a API possa ser consumida
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Header: Content-Type');
    header('Content-Type: application/json');

    require_once('jogosEndPoint/index.php');

?>