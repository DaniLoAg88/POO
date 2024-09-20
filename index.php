<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO</title>
</head>
<body>
    <h1>Clases y Objetos</h1>
    <?php
        require_once "Grupo.php";

        $p1 = new Persona();
        $p1->setNombre("Jose");
        $p1->setApellido("Perez");
        $p1->setEdad(18);
        /****/
        $p2 = new Persona();
        $p2->setNombre("María");
        $p2->setApellido("González");
        $p2->setEdad(28);
        /****/
        $p3 = new Persona();
        $p3->setNombre("Karen");
        $p3->setApellido("Simons");
        $p3->setEdad(20);
        /****/

        //Creamos un objeto de tipo Grupo para meter a varias personas
        $club = new Grupo();
        $club->agregarPersona($p1);
        $club->agregarPersona($p2);
        $club->agregarPersona($p3);

        //LLamamos al método de mostrarGrupo para ver las personas que tenemos dentro
        $club->mostrarGrupo();


    ?>
</body>
</html>
