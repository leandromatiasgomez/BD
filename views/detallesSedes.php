<link rel="stylesheet" href="style/bootstrap.css">

<div>
    <div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Carrera</th>
                    <th>Grado de carrera</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaCarreras as $carrera){?>
                    <tr>
                        <th><a href="detalleCarreras.php?id=<?php echo $carrera ['codigo_carrera']?>" style="text-decoration: none; color:#212529;"><?php echo $carrera['nombre_carrera'];?></a></th>
                        <th><?php echo $carrera['nombre_tipo_carrera']?></th>
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
                    <th>Numero de aula</th>
                    <th>Profesor/a</th>
                    <th>Materia</th>          
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaAulas as $aula){?>
                    <tr>
                        <th><?php echo $aula['numero_aula']?></th>
                        <th><?php echo $aula['apellido_empleado'];?><?php echo " " ?><?php echo $aula['nombre_empleado'];?></th>
                        <th><?php echo $aula['nombre_materia'];?></th>                       
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
                        <th><?php echo $alumno['nombre_alumno'];?></th>
                        <th><?php echo $alumno['apellido_alumno'];?></th>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>