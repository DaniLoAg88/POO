<?php

namespace Herencia2;

use Herencia2\Individuo;

class Alumno extends Individuo{
    private $matricula;

    public function __construct($nombre, $apellido, $domicilio, $edad, $matricula){
        parent::__construct($nombre, $apellido, $domicilio, $edad); //Llamamos al constructor padre y le pasamos los datos
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function mostrarAlumno(){
        //Llamamos a mostrar información del padre y añadimos la información especifica del hijo
        return parent::mostrarInformacion()."<br>Matricula: ".$this->matricula."<br>";
    }

    //Podemos utilizar cualquier método del padre dentro del hijo utilizando parent
    public function aumentadEdad(){
        parent::setEdad($this->edad+1);
    }
}