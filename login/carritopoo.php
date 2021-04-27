<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set(' error_reporting',E_ALL);  

class Cliente{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;

    public function __construct(){
        $this-> descuento = 0.0;
    }
    
    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }


    public function imprimir(){
        echo "Nombre= " . $this->nombre . "<br>";
        echo "dni= " . $this->dni . "<br>";
        echo"correo =" . $this->correo . "<br>";
        echo"telefono =" . $this->telefono . "<br>";
        echo "descuento=" . $this->descuento ."<br>";
    }
};

class producto{
    private $cod;
    private $nombre;
    private $descripcion;
    private $precio;
    private $iva;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }


        public function imprimir(){
            echo "cod= " . $this->cod . "<br>";
            echo "nombre= " . $this->nombre . "<br>";
            echo"descripcion =" . $this->descripcion . "<br>";
            echo"precio =" . $this->precio . "<br>";
            echo "iva=" . $this->iva ."<br>";
        }
    };
    class Carrito{

    }

//Programa
$cliente1 = new Cliente();
$cliente1->dni = "34765456";
$cliente1->nombre = "Bernabé";
$cliente1->correo = "bernabe@gmail.com";
$cliente1->telefono = "+541188598686";
$cliente1->descuento = 0.05;
$cliente1->imprimir();
print_r($cliente1);

$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera Whirlpool";
$producto2->descripcion = "Esta es una heladera no froze";
$producto2->precio = 76000;
$producto1->iva = 10.5;
$producto2->imprimir();

$carrito = new Carrito();
$carrito->cliente = $cliente1;
print_r($carrito);
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
$carrito->imprimir(); //Imprime el ticket de la compra
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $carrito->imprimir();?>


</body>
</html>


