<?php 

namespace empleado_1;

class Empleado {
    public function __construct()
    {
        echo "Desde empleado.php";
    }
}

$empleado = new Empleado();
