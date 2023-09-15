<?php
    require_once "include/config.php";

    $sql = "SELECT * FROM empleados WHERE codigo_cargo = 1";
    $res = mysqli_query($conn, $sql);

    if(!$res){
        die("Error: " . mysqli_connect_error($conn));
    }

    $listaProfesores = mysqli_fetch_all($res, MYSQLI_ASSOC);
    
    require_once "views/layout.php";
    require_once "views/tablaProfesores.php";
?>