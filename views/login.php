<link rel="stylesheet" href="styles/bootstrap.css">

<body>
    <div class="container" >
        <div style="width:75%; background:#252525; margin-top:5%; margin-left:auto; margin-right:auto;">
            <h1 style="color:white; text-align:center;">Administrador</h1>

            <?phP if(!empty($message)) :?>
                <p><?= $message ?></p>
            <?php endif; ?>

            <form action="login.php" method="post" style="display:table-caption; width:700%; margin-top:5%;" class="container">
                    <input type="text" name="nombre" placeholder="Nombre" style="width:100%; margin-bottom:3%; outline:none;">
                    <input type="text" name="apellido" placeholder="Apellido" style="width:100%; margin-bottom:3%; outline:none;">
                    <input type="password" name="password" placeholder="Constraseña" style="width:100%; margin-bottom:3%; outline:none;">
                    <input type="submit" name="Acceder" value="Acceder" style="margin-top:1%; margin-bottom:1%; background:white; color:#252525; border-radius:5px;">
            </form>
        </div>
    </div>
</body>
<?php

    session_start();

    if(isset($_SESSION['user_id'])){
        header('location: /BD/index.php');
    }

    if(!empty($_POST["Nombre"]) && !empty($_POST["Apellido"]) && !empty($_POST["password"])){

        $records = $conn->prepare('SELECT * FROM empleados WHERE nombre_empleado = :nombre AND apellido_empleado = :apellido AND dni_empleado = :clave');
        $records->bindParam(':nombre', $_POST['Nombre']);
        $records->bindParam(':apellido', $_POST['Apellido']);
        $records->bindParam(':clave', $_POST['password']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if(count($results) > 0 && password_verify($_POST['password'], $result['dni_empelado'])){
            $_SESSION['user_id'] = $result['codigo_empleado'];
            header('location: index.php');
        }
        else{
            $message = "Los datos son incorrectos";
        }

    }

?>
