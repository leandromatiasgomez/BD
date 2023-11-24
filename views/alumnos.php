<link rel="stylesheet" href="styles/bootstrap.css">

<?php

  session_start();

  if(isset($_SESSION['codigo_empleado'])){
    header('location: /BD/index.php');
  }

?>

<div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%; ">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($listaAlumnos as $alumno) {?>
        <tr>
          <th><?php echo $alumno['matricula'];?></th>
          <th><?php echo $alumno['nombre_alumno'];?></th>
          <th><?php echo $alumno['apellido_alumno'];?></th>
          <th><?php echo $alumno['dni_alumno']?></th>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>