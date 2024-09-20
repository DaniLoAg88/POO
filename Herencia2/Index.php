<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herencia 2</title>
</head>
<body>
<?php
    use Herencia2\Alumno;

    require_once "Individuo.php";
    require_once "Alumno.php";

    $miAlumno = new Alumno("Juan", "Perez", "C/Campo, 84", "35", "F0001");
    echo $miAlumno->mostrarAlumno();
    echo "<br>-----------------------<br>";
    echo $miAlumno->mostrarInformacion(); //Aquí llamamos al método de la clase padre, por lo que sólo nos mostrará la información del padre,
                                          // sin la matrículo porque pertenece a la clase hija
    $miAlumno->aumentadEdad();
    echo "<br>-----------------------<br>";
    echo $miAlumno->mostrarAlumno();

?>
</body>
</html>