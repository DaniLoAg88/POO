<?php

namespace Herencia2;

class Individuo{

    protected $nombre;
    protected $apellido;
    protected $domicilio;
    protected $edad;

    public function __construct($nombre, $apellido, $domicilio, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->domicilio = $domicilio;
        $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre): void{
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($apellido): void{
        $this->apellido = $apellido;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    public function setDomicilio($domicilio): void{
        $this->domicilio = $domicilio;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad): void{
        $this->edad = $edad;
    }

    public function mostrarInformacion(){
        return "Nombre: ".$this->nombre."<br>Apellido: ".$this->apellido."<br>Domicilio: ".$this->domicilio."<br>Edad: ".$this->edad;
    }

}