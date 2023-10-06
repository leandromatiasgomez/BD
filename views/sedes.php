<link rel="stylesheet" href="styles/bootstrap.css">

<div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col" style="background:black; color:white;">#</th>
        <th scope="col" style="background:black; color:white;">Nombre</th>
        <th scope="col" style="background:black; color:white;">Provincia</th>
        <th scope="col" style="background:black; color:white;">Localidad</th>
        <th scope="col" style="background:black; color:white;">Direccion</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($listaSedes as $sedes){ ?>
        <tr>
          <th><?php echo $sedes['codigo_sede'];?></th>
          <th><a href="detallesSedes.php?id=<?php echo $sedes['codigo_sede']?>" style="text-decoration: none; color:#495057;"><?php echo $sedes['nombre'];?></a></th>
          <th><?php echo $sedes['Provincia'];?></th>
          <th><?php echo $sedes['Localidad'];?></th>
          <th><?php echo $sedes['Direccion'];?></th>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>


