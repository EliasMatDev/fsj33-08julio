<?php
    // recibimos el ID a eliminar desde la URL
    $idAEliminar = $_GET['id'];
    $archivo = 'usuarios.csv';

    // recorremos el archivo y nos quedamos solo con las líneas que NO coincidan
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
    $contenidoNuevo = "";

    foreach ($lineas as $linea) {
        $datos = explode(",", $linea);
        $idActual = $datos[0];

        if ($idActual != $idAEliminar) {
            $contenidoNuevo = $contenidoNuevo . $linea . "\n";
        }
    }

    // sobrescribimos el archivo sin la línea eliminada y volvemos a la lista
    file_put_contents($archivo, $contenidoNuevo);
    header("Location: lista.php");
    exit;
?>