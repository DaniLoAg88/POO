<?php
//Importamos la clase Coche
require_once "Coche.php";
class Flota{

    public $Coches = Array();

    public function agregarCoche($nuevoCoche){
        $this->Coches[] = $nuevoCoche;
    }

    public function mostrarFlota(){
        foreach ($this->Coches as $coche){
            echo "Marca: ".$coche->getMarca()."<br>";
            echo "Modelo: ".$coche->getModelo()."<br>";
            echo "Color: ".$coche->getColor()."<br>";
            echo "KM: ".$coche->getKm()."<br><br>";
        }
    }

}