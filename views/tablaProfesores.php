<link rel="stylesheet" href="styles/bootstrap.css">

<?
    include "database.php";
    include "paginador.php";
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">dni</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        if($totalRegistros >= 1)
            foreach($registros as $reg):
    ?>
    <tr>
      <th scope="row"><?php echo $reg['id']; ?></th>
      <td><?php echo $reg['nombre']; ?></td>
      <td><?php echo $reg['apellido']; ?></td>
      <td><?php echo $reg['dni']; ?></td>
    </tr>
    <?php
        endforeach; 
        else: 
    ?>
    <tr>
        <th><?php echo "No hay registros";?></th>
    </tr>
    <?php endif;?>
  </tbody>
</table>

<?php if($totalRegistros >= 1)?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>