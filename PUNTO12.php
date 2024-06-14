<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
global $diametro;

$caudal= $_POST['caud'];
$diametro = $_POST['diam'];
$altura = $_POST['altu'];
$Pi = 3.141593;
$radio = $diametro/2;
$Vlitros = $Pi * ($radio ^ 2) * $altura;
$Vlitros = $Vlitros * 1000;

echo "El volumen del depósito es de: " . $Vlitros . " litros.";
?>
</body>
</html>