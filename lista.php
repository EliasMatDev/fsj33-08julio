<?php
    // leemos el archivo completo de usuarios
    $archivo = 'usuarios.csv';
    $filas = "";

    if (file_exists($archivo)) {
        $lineas = file($archivo, FILE_IGNORE_NEW_LINES);

        // recorremos cada línea y armamos una fila de tabla por usuario, con sus botones
        foreach ($lineas as $linea) {
            $datos = explode(",", $linea);
            $filas = $filas . "<tr><td>" . $datos[0] . "</td><td>" . $datos[1] . "</td><td>" . $datos[2] . "</td><td>" . $datos[3] . "</td><td><a class='btn-editar' href='editar.php?id=" . $datos[0] . "'>Editar</a> <a class='btn-eliminar' href='eliminar.php?id=" . $datos[0] . "' onclick=\"return confirm('¿Eliminar este registro?')\">Eliminar</a></td></tr>";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Paso 8: mostramos la tabla con el encabezado y las filas ya armadas -->
    <table class="tabla-usuarios">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Comida favorita</th>
            <th>Acción</th>
        </tr>
        <?php echo $filas; ?>
    </table>

    <a class="volver" href="formulario.php">&larr; Volver al formulario</a>

</body>
</html>