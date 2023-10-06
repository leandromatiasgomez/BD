<body>
    <h1>Inicie sesión</h1>

    <?php if(!empty($menssage)) : ?>
        <p><?= $menssage?></p>
    <?php endif;?>

    <form action="login.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="password" name="password" placeholder="DNI">

        <input type="submit" value="Send">
    </form>
</body>

<?php

    session_start();

    if(isset($_SESSION['codigo_empleado'])){
        header('location: /index.php');
    }

    require 'include/config.php';

    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['password'])){

        $records = $conn->prepare('SELECT * FROM empleados WHERE nombre=:nombre');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $menssage='';

        if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
            $_SESSION['codigo_empleado']=$results['codigo_empleado'];
            header('location: /index.php');
        }
        else{
            $menssage = 'Los datos no coinciden';
        }

    //     if(count($result) > 0 && password_verify($_POST['password'], $result['password'])){
    //         $_SESSION['user_id']=$result['id'];
    //         header('location: /BD/index.php');
    //     }
    //     else{
    //         $menssage = 'los datos no coinciden';
    //     }
        }
?>
