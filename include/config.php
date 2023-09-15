<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'utn';

    $conn = mysqli_connect($server, $username, $password, $database);

    if(!$conn){
        die('Error: ('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    // try{
    //     $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
    // }catch(PDOException $e){
    //     die('Connected failed: '.$e->getMessage());
    // }

?>