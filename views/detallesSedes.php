<link rel="stylesheet" href="style/bootstrap.css">

<div>
    <div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Carrera</th>
                    <th>Tipo de carrera</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaCarreras as $carrera){?>
                    <tr>
                        <th><a href="detallesCarreras.php"><?php echo $carrera['nombre'];?></a></th>
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
                    <th>Materia</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaAulas as $aula){?>
                    <tr>
                        <th><?php echo $aula['nombre'];?></th>
                        <th><?php echo $aula['Nombre'];?></th>
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
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaAlumnos as $alumno){?>
                    <tr>
                        <th><?php echo $alumno['matricula'];?></th>
                        <th><?php echo $alumno['nombre'];?></th>
                        <th><?php echo $alumno['codigo_tipo_carrera'];?></th>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>