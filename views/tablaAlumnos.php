<link rel="stylesheet" href="styles/bootstrap.css">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Matricula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">dni</th>
    </tr>
  </thead>
  <tbody>
    <?
        if($totalRegistros>=1):
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
      <td><?php echo "No hay registros"; ?></td>
    </tr>
    <?php
        endif;
    ?>
  </tbody>
</table>

<?php if($totalRegistros >= 1)?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php if($pagina==1): ?>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php else: ?>
    <li class="page-item">
      <a class="page-link" href="lista.php?pagina=<?php echo $pagina - 1 ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php 
        endif;
        for($i=0; $i<$numeroPaginas; $i++){
            if($pagina == $i){
                echo '<li><a href="lista.php?pagina='.$i.'">'.$i.'</a></li>';
            }
            else{
                echo '<li><a href="lista.php?pagina='.$i.'">'.$i.'</a></li>';
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
    <li class="page-item">
      <a class="page-link" href="lista.php?pagina=<?php echo $pagina + 1?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php endif;?>
  </ul>
</nav>
<?php endif;?>