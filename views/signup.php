<link rel="stylesheet" href="styles/bootstrap.css">

<body>
    <div class="container" >
        <div style="width:75%; background:#252525; margin-top:5%; margin-left:auto; margin-right:auto;">
            <h1 style="color:white; text-align:center;">Registro de alumno</h1>

            <?php 
                include("controlador.php");
            ?>

            <form action="signup.php" method="post" style="display:table-caption; width:700%; margin-top:5%;" class="container">
                    <input type="text" name="nombre" placeholder="Nombre" style="width:100%; margin-bottom:3%; outline:none;">
                    <input type="text" name="apellido" placeholder="Apellido" style="width:100%; margin-bottom:3%; outline:none;">
                    <input type="password" name="password" placeholder="Constraseña" style="width:100%; margin-bottom:3%; outline:none;">
                    <input type="submit" name="Acceder" value="Acceder" style="margin-top:1%; margin-bottom:1%; background:white; color:#252525; border-radius:5px;">
            </form>
        </div>
    </div>
</body>

<