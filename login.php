<body>
    <h1>Inicie sesión</h1>

    <?php if(!empty($menssage)) : ?>
        <p><?= $menssage?></p>
    <?php endif;?>

    <form action="login.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="password" name="password" placeholder="Constraseña">

        <input type="submit" value="Send">
    </form>
</body>

<?php

    session_start();

    if(isset($_SESSION['user_id'])){
        header('location: /BD');
    }

    require 'database.php';

    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['password'])){

        $record = $conn->prepare('SELECT * FROM empleados WHERE nombre=:nombre');
        $record->bindParam(':nobmre', $_POST['nombre']);
        $record->execute();
        $result = $record-> fetch(PDO::FETCH_ASSOC);

        $menssage='';

        if(count($result) > 0 && password_verify($_POST['password'], $result['password'])){
            $_SESSION['user_id']=$result['id'];
            header('location: /BD');
        }
        else{
            $menssage = 'los datos no coiciden';
        }
    }
?>

