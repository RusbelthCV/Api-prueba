<?php

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=badalona",'root','rusbelth22');
    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }

?>