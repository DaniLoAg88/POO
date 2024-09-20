<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangulo</title>
</head>
<body>
<?php
    include_once "Rectangulo.php";

    $rectangulo1 = new Rectangulo();
    echo "El rectangulo 1 tiene una base de ".$rectangulo1->getBase().", una altura de ".$rectangulo1->getAltura()." y su superficie es ".$rectangulo1->getSuperficie()."<br>";

    $rectangulo1->setBase(5);
    $rectangulo1 -> setAltura(8);
    echo "El rectangulo 1 tiene una base de ".$rectangulo1->getBase().", una altura de ".$rectangulo1->getAltura()." y su superficie es ".$rectangulo1->getSuperficie()."<br>";

    $rectangulo2 = new Rectangulo(15, 3);
    echo "El rectangulo 2 tiene una base de ".$rectangulo2->getBase().", una altura de ".$rectangulo2->getAltura()." y su superficie es ".$rectangulo2->getSuperficie()."<br>";

    //Si sólo le pasamos un parámetro le asignará el valor al primer parámetro que esté declarado en el constructor
    $rectangulo3 = new Rectangulo(15);
    echo "El rectangulo 3 tiene una base de ".$rectangulo3->getBase().", una altura de ".$rectangulo3->getAltura()." y su superficie es ".$rectangulo3->getSuperficie()."<br>";
    //Si queremos asignar un sólo valor y que no sea al primer parámetro, tenemos que indicar el nombre del parámetro del constructor
    $rectangulo4 = new Rectangulo(a:6);
    echo "El rectangulo 4 tiene una base de ".$rectangulo4->getBase().", una altura de ".$rectangulo4->getAltura()." y su superficie es ".$rectangulo4->getSuperficie()."<br>";

?>
</body>
</html>