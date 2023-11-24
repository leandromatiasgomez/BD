<?php

    if(!empty($_POST["Acceder"])){
        if(empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["password"])){
            echo '<div class="alert alert-danger">Faltan datos</div>';
        }
        else{
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $clave = $_POST["password"];
                $sql = $conn->query("SELECT * FROM empleados WHERE nombre_empleado = '$nombre' AND apellido_empleado = '$apellido' AND dni_empleado = '$clave'");
                if ($datos=$sql->fetch_object()) {
                    $_SESSION['codigo_empleado']=$results['codigo_empleado'];
                    header("location: index.php");
                } else {
                    echo '<div class="alert alert-danger">Datos incorrectos</div>';
                }
                
        }
    }

?>