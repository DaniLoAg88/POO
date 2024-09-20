<?php

namespace Herencia;

class Cuadrado{
    protected $base;

    public function getBase(){
        return $this->base;
    }

    public function setBase($base): void{
        $this->base = $base;
    }

    //Retornamos el valor de la superficie
    public function superficie(){
        return $this->base * $this->base;
    }
}