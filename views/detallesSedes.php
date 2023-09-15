<link rel="stylesheet" href="style/bootstrap.css">

<div>
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
                        <th><?php $carrera['Nombre'];?></th>
                        <th><?php $carrera['codigo_tipo_carrera'];?></th>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <br>
    <div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Materia</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaAulas as $aula){?>
                    <tr>
                        <th><?php $aula['codigo_aula'];?></th>
                        <th><?php $aula['Nombre'];?></th>
                        <th><?php $aula['codigo_tipo_carrera'];?></th>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>