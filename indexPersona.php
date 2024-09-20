<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prog. Orientada a Objetos</title>
</head>
<body>
<?php
//Tenemos que "importar" el fichero de la clase Persona para trabajar con él
include_once "Persona.php";

// Creamos un objeto llamado $persona1 y le asignamos los valores a los atributos
$persona1 = new Persona();
$persona1->setNombre("Sergio");
$persona1->setApellido("Martinez");
$persona1->setEdad(18);

$persona2 = new Persona();
$persona2->setNombre("Isabel");
$persona2->setApellido("Garcia");
$persona2->setEdad(35);

echo "La persona 1 es ".$persona1->getNombre()." ".$persona1->getApellido()." y su edad es ".$persona1->getEdad()." años.<br>";
echo "La persona 2 es ".$persona2->getNombre()." ".$persona2->getApellido()." y su edad es ".$persona2->getEdad()." años.<br><br>";

echo "La persona 1 es ".$persona1->nombreCompleto()."<br>";
echo "La persona 2 es ".$persona2->nombreCompleto()."<br><br>";

if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["edad"])){
    $persona3 = new Persona();
    $persona3->setNombre($_POST["nombre"]);
    $persona3->setApellido($_POST["apellido"]);
    $persona3->setEdad($_POST["edad"]);

    echo "La persona 3 es ".$persona3->nombreCompleto()."<br>";
}


//instanceof comprueba si un objeto pertenece a una clase predeterminada, ejemplo:
$persona4 = new Persona();
if($persona4 instanceof Persona){
    //Entraría en el if porque el objeto pertenece a esa clase
    //También tenemos GET_CLASS que nos dice la clase a la que pertenece el objeto
    echo "La persona4 es de tipo ".get_class($persona4)."<br>";
}
?>

<form action="indexPersona.php" method="post">
    <p><label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre"></p>
    <p><label for="apellido">Apellido:</label><input type="text" name="apellido" id="apellido"></p>
    <p><label for="edad">Edad:</label><input type="number" name="edad" id="edad"></p>
    <p><input type="submit" value="Enviar"></p>
</form>

</body>
</html>