<?php

class Persona{

    // MODIFICADORES de acceso -> public - private - protected
    // public: se puede acceder desde cualquier archivo del proyecto
    // private: sólo se accede desde la propia clase
    // protected: pueden acceder las clases hijas

    // ATRIBUTOS para la clase, los nombres deben ser como los de las variables
    private $nombre;
    private $apellido;
    private $edad;

    // Al tener los atributos privados debemos acceder desde los getter(coger) y setter(poner)
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function nombreMayusculas(){
        return strtoupper($this->nombre);
    }

    public function nombreCompleto(){
        return $this->nombre . " " . $this->apellido;
    }

    public function mostrarDatos(){
        echo "Nombre: " .$this->getNombre()."<br>"; //Podemos llamar al atributo directamente
        echo "Apellido: ".$this->apellido."<br>"; // O llamarlo con la funcion get
        echo "Edad: ".$this->edad."<br>";
    }
}
?>