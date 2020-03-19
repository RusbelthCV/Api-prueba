<?php

    include_once 'apiMiembros.php';

    $api = new ApiMiembros();

    $dataMember = $api->getAll();

    
    // $dataMember = $api->getMemeberById(7);
    // echo "<pre>";
    // var_dump($dataMember['items'][0]);
    // echo "</pre>";
?>