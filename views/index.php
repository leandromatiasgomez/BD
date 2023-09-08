<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>UTN</title>
</head>
<body>
    <div class="navbar">
        <h1><img src="img/utn.png" alt="">UTN</h1>
        <div class="buscar">
        <a href="sedes.php">Sedes</a>
        <a href="carreras.php">Carreras</a>
        <a href="tablaAlumnos.php">Estudiantes</a>
        <a href="tablaProfesores.php">Profesores</a>
    </div>
    </div>
    <!-- <div class="pre">
        <h2>Bienvenido</h2>
        <p>Por favor <a href="login.php">inicie sesión</a></a></p> 
    </div> -->

   <div id="carouselExample" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="./alumnos.jpg" alt="" class="d-block w=100">
        </div>
        <div class="carousel-item active">
          <img src="./alumnos.jpg" alt="" class="d-block w=100">
        </div>
      </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

