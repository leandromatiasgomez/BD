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
                        <th><a href="detalleCarreras.php?id=<?php echo $carrera ['codigo_carrera']?>" style="text-decoration: none; color:#495057;"><?php echo $carrera['nombreCarrera'];?></a></th>
                        <th><?php echo $carrera['nombreGrado']?></th>
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
                        <th><?php echo $aula['apellidoEmpleado'];?><?php echo " " ?><?php echo $aula['nombreEmpleado'];?></th>
                        <th><?php echo $aula['nombreMateria'];?></th>                       
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
                        <th><?php echo $alumno['Matricula'];?></th>
                        <th><?php echo $alumno['nombreAlumno'];?></th>
                        <th><?php echo $alumno['apellidoAlumno'];?></th>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>