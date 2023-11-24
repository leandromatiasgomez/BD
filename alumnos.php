<?php
    require_once "include/config.php";

    $sql = "SELECT * FROM alumnos";
    $res = mysqli_query($conn, $sql);

    if(!$res){
        die("Error: " . mysqli_error($conn));
    }

    $listaAlumnos = mysqli_fetch_all($res, MYSQLI_ASSOC);

    require_once "views/layout.php";
    require_once "views/alumnos.php";
?>