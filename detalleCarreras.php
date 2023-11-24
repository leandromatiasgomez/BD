<?php
    require_once "include/config.php";

    $sql = "SELECT * FROM carreras INNER JOIN carrerasmaterias ON carreras.codigo_carrera = carrerasmaterias.codigo_carrera INNER JOIN materias On materias.codigo_materia = carrerasmaterias.codigo_materia WHERE carreras.codigo_carrera = " . $_GET['id'];
    $res = mysqli_query($conn, $sql);

    if(!$res){
        die("Error: ". mysqli_connect_error($conn));
    }

    $listaMaterias = mysqli_fetch_all($res, MYSQLI_ASSOC);

    require_once "views/layout.php";
    require_once "views/detallesCarreras.php";
?>