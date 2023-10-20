<link rel="stylesheet" href="styles/bootstrap.css">

<div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="background:black; color:white;">#</th>
      <th scope="col" style="background:black; color:white;">Nombre</th>
      <th scope="col" style="background:black; color:white;">Apellido</th>
      <th scope="col" style="background:black; color:white;">DNI</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($listaProfesores as $profesores) {?>
      <tr>
        <th><?php echo $profesores['codigo_empleado'];?></th>
        <th><?php echo $profesores['nombreEmpleado']?></th>
        <th><?php echo $profesores['apellidoEmpleado']?></th>
        <th><?php echo $profesores['dniEmpleado']?></th>
      </tr>
    <?php }?>
  </tbody>
</table>


