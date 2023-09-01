<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <title>UTN</title>
</head>
<body>
    <div class="navbar">
        <h1><img src="img/utn.png" alt="">UTN</h1>
        
    </div>
    <!-- <div class="pre">
        <h2>Bienvenido</h2>
        <p>Por favor <a href="login.php">inicie sesión</a></a></p> 
    </div> -->

    <div class="buscar">
        <a href="sedes.php">Sedes</a>
        <a href="carreras.php">Carreras</a>
        <a href="tablaAlumnos.php">Estudiantes</a>
        <a href="tablaProfesores.php">Profesores</a>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/alumnos.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/UTN-Frente.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/UTN-Frente.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <style>
        * {
            margin: 0;
        }
        .navbar {
            width: 100%;
            height: 10%;
            border-bottom: 1px solid black;
        }

        h1 {
            padding: 20px;
            font-size: 50px;
        }

        .buscar {
            width: 100%;
            margin-top: 15px;
            text-align: center;
        }

        h2 {
            font-size: 30px;
        }

        img {
            width: 2%;
        }

    </style>
</body>
</html>

