<?php

class Rectangulo extends \Herencia\Cuadrado{

    private $altura;

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura): void{
        $this->altura = $altura;
    }

    public function superficie(){
        return $this->altura * $this->base;
    }

}