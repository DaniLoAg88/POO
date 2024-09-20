<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    use Modificadores\Producto;
    include_once "Producto.php";
    include_once "ivaVariable.php";

    //Para coger el valor de una constante necesitamos los ::, ejemplo Clase::constante
    echo "El IVA de todos los productos es ".Producto::IVA."%";

    $miProducto = new Producto("Lapiz", 1.50);
    echo "<br>";
    echo $miProducto->mostrarProducto();

    $productoIvaR = new ivaVariable("Leche", 1.33);
    $productoIvaR->setIVA(4); //Podemos acceder a una estática referenciando con el objeto
    echo $productoIvaR->mostrarProducto();

    //Otro producto que debería llevar el 21
    $productoIvaR2 = new ivaVariable("Cerveza", 1.40);
    echo $productoIvaR2->mostrarProducto()." tiene un IVA de ".ivaVariable::$IVA."%<br>";
    ivaVariable::setIVA(21); //Y podemos acceder a una estática también de ésta manera
    echo "Ahora el IVA de la cerveza es ".$productoIvaR2::$IVA."%<br>";

    /* La utilización de variables estáticas podría utilizarse por ejemplo para crear el número y su incremento de objetos
        (tipo ID, que vayamos subiendo +1 cada vez que creemos un objeto)(Hecho en ivaVariable.php) */

?>
</body>
</html>