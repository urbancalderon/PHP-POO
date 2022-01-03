<?php include 'includes/header.php';

    class MenuRestaurant {
        public $nombre = 'Nombre del Producto';
        public $precio = 0;
        public $sabor = '';

        

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Get the value of sabor
         */ 
        public function getSabor()
        {
                return $this->sabor;
        }
    }

    $bebida = new MenuRestaurant();
    $bebida->nombre = "Jugo de Naranja";
    $bebida->precio = 30;
    $bebida->sabor = "Naranja";

    echo $bebida->getNombre();
    echo $bebida->getPrecio();
    echo $bebida->getSabor();

    echo "<br>";

    $postre = new MenuRestaurant();
    $postre->nombre = "Pastel de chocolate";
    $postre->precio = 100;
    $postre->sabor = "Chocolate";

    echo $postre->getNombre();
    echo $postre->getPrecio();
    echo $postre->getSabor();