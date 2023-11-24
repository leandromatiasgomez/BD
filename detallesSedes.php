<?php
    require_once "include/config.php";

    $sql1 = "SELECT * FROM carreras INNER JOIN carrerassedes ON carreras.codigo_carrera = carrerassedes.codigo_carrera INNER JOIN sedes ON sedes.codigo_sede = carrerassedes.codigo_sede INNER JOIN tiposcarreras ON carreras.codigo_carrera = tiposcarreras.codigo_tipo_carrera WHERE sedes.codigo_sede =" . $_GET['id'];
    $sql2 = "SELECT * FROM aulas INNER JOIN empleados ON aulas.codigo_profesor = empleados.codigo_empleado INNER JOIN materias ON aulas.codigo_materia = materias.codigo_materia WHERE codigo_empleado = 1 AND codigo_sede = " . $_GET['id'];
    $sql3 = "SELECT * FROM alumnos INNER JOIN alumnosaulas ON alumnos.matricula = alumnosaulas.codigo_alumno INNER JOIN aulas ON aulas.codigo_aula = alumnosaulas.codigo_aula WHERE codigo_sede =" . $_GET['id'];
    $res1 = mysqli_query($conn, $sql1);
    $res2 = mysqli_query($conn, $sql2);
    $res3 = mysqli_query($conn, $sql3);
    
    if(!$res1){
        die("Error: ".mysqli_connect_error($conn));
    }
    if(!$res2){
        die("Error: ".mysqli_connect_error($conn));
    }
    if(!$res3){
        die("Error: ".mysqli_connect_error($conn));
    }

    $listaCarreras = mysqli_fetch_all($res1, MYSQLI_ASSOC);
    $listaAulas = mysqli_fetch_all($res2, MYSQLI_ASSOC);
    $listaAlumnos = mysqli_fetch_all($res3, MYSQLI_ASSOC);

    require_once "views/layout.php";
    require_once "views/detallesSedes.php";
?>