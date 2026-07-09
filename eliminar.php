<?php 
    $idAEliminar = $_GET['id'];
    $archivo = 'usuarios.csv';

    // recorremos el archivo y nos quedamos solo con las lines que no coincidan
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
    $contenidoNuevo = "";

    foreach ($lineas as linea) {
        $datos = explode(",", $linea);
        $idActual = $datos[0];

        if ($idActual != $idAEliminar ) {
            $contenidoNuevo = $contenidoNuevo . $linea . "\n";
        }
    
}

        file_put_contents($archivo, $contenidoNuevo);
        header("Location: lista.php");
        exit;

        ?>