<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario basico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <form class="formulario" method="POST" action="procesar.php">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre">

        <label for="edad">Edad</label>
        <input type="number" id="edad" name="edad" placeholder="18" min="1">

        <label for="comida">Comida favorita</label>
        <select name="comida" id="comida">
            <option value="pupusas">Pupusas</option>
            <option value="pizza">Pizza</option>
            <option value="tacos">Tacos</option>
            <option value="sopa">Sopa</option>
        </select>

        <button type="submit">Enviar</button>
    </form>

    <a class="volver" href="lista.php">Ver lista de usuarios registrados &rarr;</a>

</body>
</html>