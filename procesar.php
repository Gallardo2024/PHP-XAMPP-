<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = $_POST['nombre'];
  $deportes = $_POST['deportes'];
  $nDeportes = count($deportes);
  echo "<h1>Resultado</h1>";
  echo "<p>Nombre: $nombre</p>";
  echo "<p>Deportes: " . implode(", ", $deportes) . "</p>";
  echo "<p>Número de deportes: $nDeportes</p>";
}
?>
</body>
</html>