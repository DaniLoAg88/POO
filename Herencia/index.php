<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herencia</title>
</head>
<body>
<?php
    require_once "Cuadrado.php";
    require_once "Rectangulo.php";
//    use Herencia\Cuadrado; -> Otra manera de integrar el fichero de la clase en el Index

    $miCuadrado = new \Herencia\Cuadrado();
    $miCuadrado->setBase(45);
    echo "La superficie de mi cuadrado es ".$miCuadrado->superficie()."<br>";

    $miRectangulo = new Rectangulo();
    $miRectangulo->setBase(22);
    $miRectangulo->setAltura(6);
    //POLIMORFISMO -> Cuando tenemos métodos con el mismo nombre pero depende de que clase sea el objeto actuará de una manera u otra
    echo "La superficie de mi rectangulo es ".$miRectangulo->superficie()."<br>";

?>
</body>
</html>