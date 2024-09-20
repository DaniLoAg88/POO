<?php
// Vamos a "importar" la clase Persona
require_once "Persona.php";

// Ésta clase la utilizaremos para crear un "array" de objetos de la clase Persona
class Grupo{
    public $Personas = [];

    //Agregamos una persona al array
    public function agregarPersona(Persona $persona){
        $this->Personas[] = $persona;
    }

    //Recorremos y mostramos el Array
    public function mostrarGrupo(){
        foreach($this->Personas as $individuo){
            echo "Nombre: ".$individuo->getNombre()."<br>";
            echo "Apellido: ".$individuo->getApellido()."<br>";
            echo "Edad: ".$individuo->getEdad()."<br><br>";
        }
    }
}