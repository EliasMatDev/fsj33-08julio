<?php
    // recibimos el ID a editar desde la URL
    $idAEditar = $_GET['id'];
    $archivo = 'usuarios.csv';

    // buscamos, línea por línea, al usuario con ese ID
    $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
    $usuarioEncontrado = null;

    foreach ($lineas as $linea) {
        $datos = explode(",", $linea);

        if ($datos[0] == $idAEditar) {
            $usuarioEncontrado = $datos;
        }
    }

    // preparamos cuál option del select debe verse ya marcada
    $comidaActual = $usuarioEncontrado[3];
    $opcionPupusas = "";
    $opcionPizza = "";
    $opcionTacos = "";
    $opcionSopa = "";

    if ($comidaActual == "pupusas") { $opcionPupusas = "selected"; }
    if ($comidaActual == "pizza")   { $opcionPizza = "selected"; }
    if ($comidaActual == "tacos")   { $opcionTacos = "selected"; }
    if ($comidaActual == "sopa")    { $opcionSopa = "selected"; }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    
    <form class="formulario" method="POST" action="guardar.php">
        <input type="hidden" name="id" value="<?php echo $usuarioEncontrado[0]; ?>">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $usuarioEncontrado[1]; ?>">

        <label for="edad">Edad</label>
        <input type="number" id="edad" name="edad" value="<?php echo $usuarioEncontrado[2]; ?>" min="1">

        <label for="comida">Comida favorita</label>
        <select id="comida" name="comida">
            <option value="pupusas" <?php echo $opcionPupusas; ?>>Pupusas</option>
            <option value="pizza" <?php echo $opcionPizza; ?>>Pizza</option>
            <option value="tacos" <?php echo $opcionTacos; ?>>Tacos</option>
            <option value="sopa" <?php echo $opcionSopa; ?>>Sopa</option>
        </select>

        <button type="submit">Guardar cambios</button>
    </form>

</body>
</html>