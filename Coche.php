<?php

class Coche{
    private $marca;
    private $modelo;
    private $km;
    private $color;

    public function __construct($marca, $modelo, $km, $color){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->km = $km;
        $this->color = $color;
    }

    public function getMarca()    {
        return $this->marca;
    }

    public function setMarca($marca): void    {
        $this->marca = $marca;
    }

    public function getModelo()    {
        return $this->modelo;
    }

    public function setModelo($modelo): void{
        $this->modelo = $modelo;
    }

    public function getKm(){
        return $this->km;
    }

    public function setKm($km): void{
        $this->km = $km;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color): void{
        $this->color = $color;
    }

    public function __toString(){
        return "Marca: ".$this->marca.", Modelo: ".$this->modelo.", Km: ".$this->km.", Color: ".$this->color;
    }

}
?>