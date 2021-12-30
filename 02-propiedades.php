<?php include 'includes/header.php';

class MenuRestaurant {   
    public $nombre = 'Nombre del producto';
    public $precio = 0;

}

$bebida = new MenuRestaurant();
$bebida->nombre = 'Jugo de naranja';
$precio->precio = 30;

// Acceder al valor de un objeto
echo $bebida->nombre;

var_dump($bebida); 

$postre = new MenuRestaurant();
$postre->nombre = "Postre";
$postre->precio = 100;

var_dump($postre); 