 <?php include 'includes/header.php';

// La interface tiene como fin que sirva como estructura para la clase y metodos (es una plantilla, un template para las clases)

interface RestauranteInterface 
{
    public function getNombre();

    public function getPrecio();
}

class MenuRestaurant implements RestauranteInterface { 
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