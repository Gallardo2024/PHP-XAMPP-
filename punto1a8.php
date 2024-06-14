<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php
    echo "<p>Practico de php<p/>";
    $date=date("d");
    echo "hoy juega boca ". $date ."<br>";
    $num=rand(1,100);
    echo "numero alelatorio ". $num=rand(1,100)."<p>";

    $dia=24;
    echo "se declara una variable ". $date=(24);

    $sueldo=758.43;
    echo "se declara una variable tipo double ". $sueldo. "<br>";

    $nombre="juan";
    echo "se declara una variable de tipo de string".$nombre."<br>";

    $exite=true;
    echo "se declara una variable  ".$exite."<br>";

    $nombre="Kevin";
    echo "Nombre:  " .$nombre. "<br>";
    $apellido="Gallardo";
    echo "Apellido:  ".$apellido."<br>";
    $edad=17;
    echo "Mi edada es de:  ".$edad. "<br>";
    $curso="Sexto año";
    echo "Estoy en el curso de:  ".$curso. "<br>";
    $año=2023;
    echo "Es el año  ".$año. "<br>";
    $divicion=1;
    echo "Divicion  ".$divicion. "<br>";
    $var=rand(1,3);
    if ($var==1)
    {
     echo "<p>"."uno" ."<p/>";
    }elseif($var==2){
        echo "<p>". "dos"."<p/>" ;

    }elseif($var==3){
        echo "<p>"."tres". "<p/>";
    }
    $x=rand(1,100);
    for($f=1;$f<=$x;$f++)
    {
      echo $f;

    }
    $f=1;
    
    while($f<=$x)
    {
        echo $f;
        $f++;
    }
    
    $x=rand(1,100);
    for($f=1;$f<=$x;$f++)
    if ($f % 2 == 0)
    {
        echo $f;
        echo "<br>";
    }

    $f=1;
    while($f<=$x){
     if ($f % 2 != 0)
    {
        echo $f;
    }
        $f++;
    }




    
    


    






   
?>

</body>
</html>