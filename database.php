<?php

    $server="localhost";
    $username="root";
    $password="";
    $database="UTN";

    try{
        $conn = new PDO("mysql:host=$server, bdname=$database", $username, $password);
    }
    catch(PDOException $e){
        die('Connectid fieled: '.$e->getMessage());
    }

?>