<?php

use Postre as GlobalPostre;

include 'includes/header.php';

class Bebida {
    public $nombre;
    public $precio;
    public $medida;

    public function __construct( $nombre, $precio, $medida ) { 
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->medida = $medida;
    }

    public function getNombre() 
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre {
    public $nombre;
    public $precio;
    public $peso;

    public function __construct( $nombre, $precio, $peso ) { 
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->peso = $peso;
    }

    public function getNombre() 
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPeso()
    {
        return $this->peso;
    }
}

$bebida = new Bebida("Cerveza", 15, "30 ml");
var_dump($bebida);

$postre = new Postre("Cerveza", 15, "30 ml");
var_dump($postre);

