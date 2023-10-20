<link rel="stylesheet" href="styles/bootstrap.css">

<body>
    <div class="container" style="width:25%; background:#252525; margin-top:5%; margin-left:auto; margin-right:auto;" >
        <h1 style="color:white; text-align:center;">Administrador</h1>

        <?php if(!empty($menssage)) : ?>
            <p><?= $menssage?></p>
        <?php endif;?>

        <form action="login.php" method="post">
            <div style="display:table-caption;" >
                <input type="text" name="nombre" placeholder="Nombre" style="width:400px; margin-bottom:3%; outline:none;">
                <input type="text" name="apellido" placeholder="Apellido" style="width:400px; margin-bottom:3%; outline:none;">
                <input type="password" name="password" placeholder="Constraseña" style="width:400px; margin-bottom:3%; outline:none;">
            </div>
            <input type="submit" value="Acceder" style="margin-top:1%; margin-bottom:1%; background:white; color:#252525; border-radius:5px;">      
        </form>
    </div>
</body>
<?php

    session_start();

    if(isset($_SESSION['codigo_empleado'])){
        header('location: /index.php');
    }

    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['password'])){

        $records = $conn->prepare('SELECT nombreEmpleado, apellidoEmpleado, dniEmpleado FROM empleados WHERE nombre=:nombreEmpleado AND apellido=:apellidoEmpleado');
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $menssage='';

        if(count($results) > 0 && password_verify($_POST['password'], $results['dniEmpleado'])){
            $_SESSION['codigo_empleado']=$results['codigo_empleado'];
            header('location: /index.php');
        }
        else{
            $menssage = 'Los datos no coinciden';
        }
    }
?>
