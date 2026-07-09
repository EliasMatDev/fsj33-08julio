<?php
    // leemos el archivo completo de usuarios
    $archivo = 'usuarios.csv';
    $filas = "";

    if(file_exists($archivo)){
        $lineas = file($archivo, FILE_IGNORE_NEW_LINES);

        // recorremos cada linea y armamos una fila de la tabla por usuario, con sus botones
        foreach ($lineas as linea) {
            $filas = $filas . "<tr><td>" . $datos[0] . 
        }
    }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de usuarios</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <table class="">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Comida favorita</th>
                <th>Accion</th>
            </tr>
            <?php echo $filas; ?>
        </table>

        <a class="volver" href="formulario.php">&larr; Volver al formulario</a>

    </body>
    </html>