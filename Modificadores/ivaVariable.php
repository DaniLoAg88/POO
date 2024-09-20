<?php


class ivaVariable{
    public static $IVA = 21; //Las estáticas si se puede modificar el valor,
                            // pero hay que acceder a ella también a través de :: (self si es en el mismo archivo). Hay que poner el $
    public static $id = 0; //Llevaremos un contador de id´s
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
        self::$id++;
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

    public static function getIVA(): int
    {
        return self::$IVA; //self para acceder por ser static
    }

    public static function setIVA(int $IVA): void
    {
        self::$IVA = $IVA;
    }

    public function mostrarProducto(){
        return "<br>Id: ".self::$id.
                "<br>Producto: ".$this->nombreProducto.
                "<br>Precio base: ".$this->precioProducto.
                "<br>Precio con IVA: ".$this->precioProducto*((self::$IVA/100)+1)."<br>";
    }

}