<?php

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    $regPagina=10;

    $inicio = ($pagina>1) ? (($pagina * $regPagina)-$regPagina) : 0;

    $registros = $conn->prepare("SELECT SQL_CALC_FOUND_ROW * FROM alumnos LIMIT $inicio, $regPagina");

    $registros->execute();
    $registros=$registros->fecthAll();

    $totalRegistros = $conn-> query("SELECT FOUND_ROW() as total");
    $totalRegistros = $totalRegistros->fecth()['total'];

    $numeroPaginas = ceil($totalRegistros * $regPagina);

?>