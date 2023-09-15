<link rel="stylesheet" href="styles/bootstrap.css">

<div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%; ">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Apellido</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($listaAlumnos as $alumno) {?>
        <tr>
          <th><?php echo $alumno['Matricula'];?></th>
          <th><?php echo $alumno['Nombre'];?></th>
          <th><?php echo $alumno['Apellido'];?></th>
        </tr>
      <?php }?>
    </tbody>
  </table>
</div>