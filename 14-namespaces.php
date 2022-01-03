<?php 
// Permite que multiples clases se llamen de la misma forma sin causar ningun conflicto

namespace empleado_2;
include 'includes/header.php';

require_once 'Empleado.php';

echo "<br>";

class Empleado {
    public function __construct()
    {
        echo "Desde 14-namespaces.php";
    }
}

$empleado = new Empleado();
