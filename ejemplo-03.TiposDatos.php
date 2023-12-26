<?php
require("errores.php");
?>

<?php
$camion = null;                     // Tipo nulo
$activo = true;                     // Tipo Booleano (true|false)

$numero = 10;                       // Tipos enteros
$decimal = 102;                     
$octal = 0o102;
$hexadecimal = 0xCCC;
$binario = 0b1011100;

$flotante = 1.234;                  // Tipos flotantes (o double)
$notCientifica = 1.2E-10;

$nombreEmpresa = "Soltel";          // >Tipos Cadena
$miColeccion = array("Volvo FH", "Mercedes EQS", "Apple Mac");

class Camion {
    public $marca = "Volvo";
    public $modelo = "FH Electric";
}
$miCamion = new Camion();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $camion . "<br>";
    echo $activo . "<br>";

    echo $hexadecimal . "<br>";
    echo dechex($hexadecimal). "<br>";      // hexdec -> Paso a decimal
    echo decoct($octal). "<br>";            // octdec -> Paso a decimal
    echo decbin($binario). "<br>";          // bindec -> Paso a decimal

    echo $flotante. "<br>";                 
    echo $notCientifica. "<br>"; 

    echo $nombreEmpresa . "<br>";
    echo var_dump($miColeccion) . "<br>";
    echo var_dump($miCamion). "<br>";
    ?>
</body>

</html>
