<?php include 'includes/header.php';

// Las clases abstractas son clases que no se pueden heredar pero sus clases hijas si

abstract class MenuRestaurant { 
    public $nombre; 
    protected $precio;

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
        parent::__construct( $nombre, $precio  );
        $this->medida = $medida;
    }
    public function getPrecio()
    {
        return "El precio es: " . $this->precio;
    }
    public function getMedida()
    {
        return $this->medida;
    }
}

class Postre extends MenuRestaurant {
    public $peso;

    public function __construct( $nombre, $precio, $peso ) { 
        parent::__construct( $nombre, $precio );
        $this->peso = $peso;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}

$postre = new Postre('Pastel de Fresa', 100, '200g');
var_dump($postre);