<?php

namespace Modificadores;

class Producto{
    const IVA = 21; //Las constantes no se pueden modificar el valor,
                    // y tendremos que acceder a ella a través de :: (self si es en el mismo archivo). No hay que poner el $
    private $nombreProducto;
    private $precioProducto;

    /**
     * @param $nombreProducto
     * @param $precioProducto
     */
    public function __construct($nombreProducto, $precioProducto)
    {
        $this->nombreProducto = $nombreProducto;
        $this->precioProducto = $precioProducto;
    }

    /**
     * @return mixed
     */
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * @param mixed $nombreProducto
     */
    public function setNombreProducto($nombreProducto): void
    {
        $this->nombreProducto = $nombreProducto;
    }

    /**
     * @return mixed
     */
    public function getPrecioProducto()
    {
        return $this->precioProducto;
    }

    /**
     * @param mixed $precioProducto
     */
    public function setPrecioProducto($precioProducto): void
    {
        $this->precioProducto = $precioProducto;
    }

    public function mostrarProducto(){
        return "Producto: ".$this->nombreProducto.
                "<br>Precio base: ".$this->precioProducto.
                "<br>Precio con IVA: ".$this->precioProducto*((self::IVA/100)+1)."<br>";
    }

}