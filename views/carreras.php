<link rel="stylesheet" href="styles/bootstrap.css">

<div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Carrera</th>
                <th>Tipo de carrera</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaCarreras as $carrera){?>
                <tr>
                    <th><?php echo $carrera['codigo_carrera'];?></th>
                    <th><a href="detalleCarreras.php?id=<?php echo $carrera ['codigo_carrera']?>" style="text-decoration: none; color:#495057;"><?php echo $carrera['nombreCarrera'];?></a></th>
                    <th><?php echo $carrera['nombreGrado'];?></th>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>