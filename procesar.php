<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $comida = $_POST['comida'];

        if (empty($nombre)) {
            echo "<p class='mensaje-error'>Por favor escribe tu nombre antes de enviar.</p>";
        } else {
            //Preparamos el archivo donde vamos a guardar a los usuarios
            $archivo = 'usuarios.csv';

            // Calculamos el siguiente ID contando cuantos usuarios ya existen
            $totalUsurios = 0;
            if (file_exists($archivo)) {
                $lineas = file($archivo);
                $totalUsurios = count($lineas);
            }
            $nuevoId = $totalUsurios + 1;

            // armar la linea nueva y la guardamos al final del archivo
            $nuevaLinea = $nuevoId . "," . $nombre . "," . $edad . "," . $comida . "\n";
            file_put_contents($archivo, $nuevaLinea, FILE_APPEND);
            
            // MOSTRAR EL MENSAJE, AHORA INCLUYENDO EL ID QUE SE LE ASIGNO
            echo "<p class='mensaje-ok'>Hola, " . $nombre . ". Tu ID de registro es #" . $nuevoId . ". Tienes " . $edad . " años y te gusta comer " . $comida . ".</p>";
        }
    ?>

    <a class="volver" href="formulario.php">&larr; Volver al formulario</a>

</body>
</html>