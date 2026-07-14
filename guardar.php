<?php
    // recibimos el ID y los datos ya editados desde el formulario
    $idAEditar = $_POST['id'];
    $nombreNuevo = $_POST['nombre'];
    $edadNueva = $_POST['edad'];
    $comidaNueva = $_POST['comida'];

    // reconstruimos el archivo reemplazando solo la linea del ID editado
    $archivo = 'usuarios.csv';
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
    $contenidoNuevo = "";

    foreach ($lineas as $linea) {
        $datos = explode(",", $linea);

        if ($datos[0] == $idAEditar) {
            $contenidoNuevo = $contenidoNuevo . $idAEditar . "," . $nombreNuevo . "," . $edadNueva . "," . $comidaNueva . "\n";
        } else {
            $contenidoNuevo = $contenidoNuevo . $linea . "\n";
        }
    }

    // guardamos los cambios en el archivo y volvemos a la lista
    file_put_contents($archivo, $contenidoNuevo);
    header("Location: lista.php");
    exit;
?>