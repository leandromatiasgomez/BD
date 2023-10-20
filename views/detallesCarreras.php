<link rel="stylesheet" href="style/bootstrap.css">

<div style="width:75%; margin-left:auto; margin-right:auto; margin-top:2%;">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Materias</th>   
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaMaterias as $materia) {?>
                <tr>
                    <th><?php echo $materia['nombreMateria'];?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

