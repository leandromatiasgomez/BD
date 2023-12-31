<?php
  session_start();

  if(isset($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT * FROM empleados WHERE codigo_empleados = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if(count($results) > 0){
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>UTN</title>
    <link rel="stylesheet" href="styles/bootstrap.css">
</head>
  <body>

    <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/utn1.jpg" class="d-block w-100"  height="600">
        </div>
        <div class="carousel-item">
          <img src="img/utn2.jpg" class="d-block w-100" height="600">
        </div>
        <div class="carousel-item">
          <img src="img/utn3.png" class="d-block w-100" height="600">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- <div>
      <?php if(empty($user)) : ?>
        <div class="btn" style="background: #3D464D; margin-top:1%; margin-left:1%;">
          <a href="views/logout.php" style="text-decoration:none; color:white;">cerrar sesión</a>
        </div>
      <?php 
        endif;
        if(!empty($user)) : 
      ?>
        <div class="btn" style="background: #3D464D; margin-top:1%; margin-left:1%;">
          <a href="login.php" style="text-decoration:none; color:white;">Administrar</a>
        </div>         
      <?php endif; ?>
    </div> -->

    <div class="container" style="margin-top:3%; margin-bottom:3%;">
      <div style="display:flex;">
        <a href=""><img src="img/utn1.jpg" class="d-block w-100"  height="300"></a>
        <a href=""><img src="img/utn2.jpg" class="d-block w-100" height="300"></a>
      </div>
      <a href=""><img src="img/utn3.png" class="d-block w-100" height="400"></a>      
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

