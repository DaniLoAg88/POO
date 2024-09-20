<?php

class Animales{
    private $nombre;
    private $edad;
    private $raza;
    private $peso;

    // Método constructor, crea el objeto con todos los datos, que se reciben por parámetros
    public function __construct($nombre, $edad, $raza, $peso){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->raza = $raza;
        $this->peso = $peso;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre): void{
        $this->nombre = $nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad): void{
        $this->edad = $edad;
    }

    public function getRaza(){
        return $this->raza;
    }

    public function setRaza($raza): void{
        $this->raza = $raza;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso): void{
        $this->peso = $peso;
    }

    public function mostrarDatos(){
        return "Nombre: ".$this->nombre." Edad: ".$this->edad." Raza: ".$this->raza." Peso: ".$this->peso;
    }
}

$miPerro = new Animales("Misifú", 4, "Agora Turco", 8);
echo $miPerro->mostrarDatos();