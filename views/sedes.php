<link rel="stylesheet" href="css/bootstrap.css">



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
    <?php
      if($totalRegistros >= 1):
      foreach($registros as $reg):
    ?>
    <tr>
      <th scope="row"><?php echo $reg['id']; ?></th>
      <td><?php echo $reg['nombre']; ?></td>
      <td><?php echo $reg['Provincia']; ?></td>
      <td><? echo $reg['Localidad']; ?></td>
      <td><? echo $reg['Direccion']; ?></td>
    </tr>
    <?php
      endforeach;
      else:
    ?>
    <tr>
      <td><?php echo "No hay registros";?></td>
    </tr>
    <?php
      endif;
    ?>
  </tbody>
</table>

<?php if($totalRegistros >= 1): ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php if($pagina==1):?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php else:?>
      <li class="page-item">
        <a class="page-link" href="lista.php?pagina=<?php echo $pagina - 1?>" >
          <span>&laquo;</span>
        </a>
      </li>
    <?php 
      endif;
      for($i=0; $i<$numeroPaginas; $i++){
        if($pagina == $i){
          echo'<li><a href="lista.php?pagina='.$i.'">'.$i.'</a></li>';
        }
        else{
          echo'<li><a href="lista.php?pagina='.$i.'">'.$i.'</a></li>';
        }
      }
      
      if($pagina == $numeroPaginas):
    ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php else: ?>
    <li>
      <a href="lista.php?pagina=<?php echo $pagina + 1?>">&raquo;</a>
    </li>
    <?php endif;?>
  </ul>
</nav>
<?php endif;?>
</div>
