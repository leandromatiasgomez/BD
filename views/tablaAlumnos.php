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
          <th><?php echo $alumno['Matricula'];?></th>
          <th><?php echo $alumno['nombreAlumno'];?></th>
          <th><?php echo $alumno['apellidoAlumno'];?></th>
          <th><?php echo $alumno['dniAlumno']?></th>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>