<link rel="stylesheet" href="styles/bootstrap.css">
<link rel="stylesheet" href="styles/styleBD.css">

<div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th class="encabezado">Carrera (Hacer click para más información)</th>
                <th class="encabezado">Tipo de carrera</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaCarreras as $carrera){?>
                <tr>
                    <th><a href="detalleCarreras.php?id=<?php echo $carrera ['codigo_carrera']?>" style="text-decoration: none; color:#495057;"><?php echo $carrera['nombre_carrera'];?></a></th>
                    <th><?php echo $carrera['nombre_tipo_carrera'];?></th>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>