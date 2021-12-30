<?php include 'includes/header.php';

    class MenuRestaurant {
        public $nombre = 'Nombre del Producto';
        public $precio = 0;

        public function getNombre() {
            return $this->nombre;
        }
    }

    $bebida = new MenuRestaurant();
    $bebida->nombre = "Jugo de Naranja";
    $bebida->precio = 30;
    echo $bebida->getNombre();

    echo "<br>";

    $bebida = new MenuRestaurant();