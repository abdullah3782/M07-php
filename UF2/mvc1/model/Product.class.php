<?php
class Product
{

    private $id;
    private $name;
    private $marca;
    private $descripcio;

    private $precio;

    private $productList = array(); // si el necessitessim en una posterior ampliació!

    public function __construct($id = NULL, $marca  = NULL,  $name = NULL, $descripcio = NULL, $precio = NULL)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->name = $name;
        $this->descripcio = $descripcio;
        $this->precio = $precio;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getProductList()
    {
        return $this->productList;
    }

    public function setProductList($productList)
    {
        $this->productList[] = $productList;
    }



    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }



    public function getDescripcio()
    {
        return $this->descripcio;
    }
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;
    }


    public function getprecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    public function writingNewLine()
    {
        return "\n$this->id;$this->name;"; // podríem volem algun mètode extrar de la classe que ens fos interessant i general
    }
}
