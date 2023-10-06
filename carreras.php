<?php
    require_once "include/config.php";

    $sql = "SELECT * FROM carreras INNER JOIN tipocarreras ON carreras.codigo_tipo_carrera = tipocarreras.codigo_tipo_carrera";
    $res = mysqli_query($conn, $sql);

    if(!$res){
        die("Error: " . mysqli_connect_error($conn));
    }

    $listaCarreras = mysqli_fetch_all($res, MYSQLI_ASSOC);
    
    require_once "views/layout.php";
    require_once "views/carreras.php";
?>