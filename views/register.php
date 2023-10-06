<body>
    <?php
    
        session_start();

        if(isset($_SESSION['codigo_empleado'])){
            header('location: /index.php');
        }
    ?>
    <h1>Inicie sesión</h1>

    <?php if(!empty($menssage)) : ?>
        <p><?= $menssage?></p>
    <?php endif;?>

    <form action="register.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="Apellido" placeholder="Apellido">
        <input type="password" name="DNI" placeholder="DNI">
    </form>
</body>