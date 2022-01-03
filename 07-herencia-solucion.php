<?php

use MenuRestaurant as GlobalMenuRestaurant;

include 'includes/header.php';


class MenuRestaurant {
    public $nombre;
    public $precio;

    public function __construct( $nombre, $precio ) { 
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() 
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }
}

class Bebida extends MenuRestaurant {
    public $medida;

    public function __construct( $nombre, $precio, $medida ) { 
        parent::__construct($nombre, $precio);
        $this->medida = $medida;
    }

    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant {
    public $peso;

    public function __construct( $nombre, $precio, $peso ) { 
        parent::__construct($nombre, $precio);
        $this->peso = $peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }
}

$bebida = new Bebida("Cerveza", 15, "30 ml");
var_dump($bebida);

$postre = new Postre("Pastel de chocolate", 150, "1 kg");
var_dump($postre);
