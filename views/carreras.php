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
                    <th><?php $carrera['codigo_carrera'];?></th>
                    <th><a href="detallesCarerras.php?id=<?php echo $carrera ['codigo_carrera']?>" styles="text-decoration: none; color:#495057;"><?php $carrera['Nombre'];?></a></th>
                    <th><?php $carrera['codigo_tipo_carrera'];?></th>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>