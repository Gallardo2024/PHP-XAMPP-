<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

<?php
    $diametro = $_POST['diam'];
    $altura = $_POST['altu'];
    $radio = $diametro/2;
    $Pi = 3.141593;
    $volumen = $Pi*$radio*$radio*$altura;
    
    echo "<br/> El volumen del cilindro es de  ". $volumen. " metros cúbicos  ";

    
    


    






   
?>

</body>
</html>