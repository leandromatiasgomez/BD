<link rel="stylesheet" href="styles/bootstrap.css">



<div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo de carrera</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if($totalRegistros >= 1):
                foreach($registros as $reg):
        ?>
        <tr>
            <th><?php echo $reg['id']?></th>
            <th><?php echo $reg['nombre']?></th>
            <th><?php echo $reg['nombreTipo']?></th>
        </tr>
        <?php
            endforeach;
            else:
        ?>
        <tr>
            <th>"No hay registros"</th>
        </tr>
        <?
        endif;
        ?>
    </tbody>
</table>

<?php if($totalRegistros >= 1): ?>
    <nav>
        <ul>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php else: ?>
            <li>
                <a href="list.php?pagina=<?php echo $pagina - 1?>">
                    <span>&laquo;</span>
                </a>
            </li>
        </ul>
    </nav>
<?php 
    endif;
    for($i; $i<$numeroPaginas; $i++){
        if($i == 1){
            echo '<li><a href="list.php?pagina='.$i.'">'.$i.'</a></li>';
        }
        else{
            echo '<li><a href="list.php?pagina='.$i.'">'.$i.'</a></li>';
        }
    }
    
    if($pagina == $numeroPaginas):
?>
    <nav>
        <ul>
            <li>
                <a href="">
                    <span>&raquo;</span>
                </a>
            </li>
            <?php else: ?>
            <li>
                <a href="list.php?=<?php echo $pagina + 1?>">
                    <span>&raquo;</span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
</div>
