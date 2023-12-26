<?php
// variableDiaHoy -> camelCase
$variableDiaHoy = date("d/m/Y");
// hora_actual -> snake
$hora_actual = date("H:i:s");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Titulo de la página</h1>
    <?php
    // Incrusto las variables dentro de la salida del echo
    echo "<p>Hoy es $variableDiaHoy y la hora es $hora_actual</p>";
    ?>
</body>

</html>