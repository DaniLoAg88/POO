<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coche</title>
</head>
<body>
<form action="indexCoche.php" method="post">
    <p><label for="marca">Marca:</label><input type="text" name="marca" id="marca" required></p>
    <p><label for="modelo">Modelo:</label><input type="text" name="modelo" id="modelo" required></p>
    <p><label for="km">Kilómetros:</label><input type="number" name="km" id="km" required></p>
    <p><label for="color">Color:</label><input type="text" name="color" id="color" required></p>
    <p><input type="submit" value="Enviar"></p>
</form>
<?php

include_once "Flota.php";
include_once "Coche.php";
session_start();

if(!isset($_SESSION["flota"])){
    $_SESSION["flota"] = new Flota();
}

if(isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["km"]) && isset($_POST["color"])){

    $cocheForm = new Coche($_POST["marca"], $_POST["modelo"], $_POST["km"], $_POST["color"]);

    $_SESSION["flota"]->agregarCoche($cocheForm);
    $_SESSION["flota"]->mostrarFlota();
    echo "La variable sesión es de clase ".get_class($_SESSION["flota"]);

}

?>
</body>
</html>