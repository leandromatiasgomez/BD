<?php
    require_once "include/config.php";

    $sql1 = "SELECT * FROM carreras INNER JOIN carrerasSedes ON carreras.codigo_carrera = carrerasSedes.codigo_carrera WHERE codigo_sede = " . $_GET['id'];
    $sql2 = "SELECT * FROM aulas WHERE codigo_sede = " . $_GET['id'];
    $res1 = mysqli_query($conn, $sql1);
    $res2 = mysqli_query($conn, $sql2);

    if(!$res1){
        die("Error: ".mysqli_connect_error($conn));
    }
    if(!$res2){
        die("Error: ".mysqli_connect_error($conn));
    }

    $listaCarreras = mysqli_fetch_all($res1, MYSQLI_ASSOC);
    $listaAulas = mysqli_fetch_all($res2, MYSQLI_ASSOC);

    require_once "views/layout.php";
    require_once "views/detallesSedes.php";
?>