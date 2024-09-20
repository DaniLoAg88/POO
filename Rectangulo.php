<?php

class Rectangulo{

    private $base;
    private $altura;

    //Método constructor --- Asignar valores de inicio a los atributos
    public function __construct($b=1, $a=1){
        $this->altura = $a;
        $this->base = $b;
    }

    public function getBase(){
        return $this->base;
    }

    public function setBase($base): void{
        $this->base = $base;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura): void{
        $this->altura = $altura;
    }

    public function getSuperficie(){
        return $this->base * $this->altura;
    }

}