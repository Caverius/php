<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set(' error_reporting',E_ALL);  

class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

    public function setNombre($nombre){ $this->nombre = $nombre; }
    public function getNombre(){ return $this->nombre; }

    public function setDni($dni){ $this->dni = $dni; }
    public function getDni(){ return $this->dni; }

    public function setNacionalidad($nacionalidad){ $this->nacionalidad = $nacionalidad; }
    public function getNacionalidad(){ return $this->nacionalidad; }

    public function setEdad($edad){ $this->edad = $edad; }
    public function getEdad(){ return $this->edad; }


    public function imprimir(){
        echo "Nombre= " . $this->nombre . "<br>";
        echo"Edad =" . $this->edad . "<br>";
        echo "dni= " . $this->dni . "<br>";
        echo"edad =" . $this->edad . "<br>";
        echo"nacionalidad =" . $this->nacionalidad . "<br>";
    }
};
class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }


    public function __construct(){
        $this->notaPortfolio;
        $this->notaPhp;
        $this->notaProyecto;
    }
    public function imprimir(){
        echo "Nombre= " . $this->nombre . "<br>";
        echo"Edad =" . $this->edad . "<br>";
        echo "Nota Portfolio=" . $this->notaPortfolio . "<br>";
        echo"Nota Php =" . $this->notaPhp . "<br>";
        echo"Nota Proyecto =" . $this->notaProyecto . "<br>";
    }

}
class Docente extends Persona{
    public $especialidad;

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad = $valor;
    }

    public function imprimirEspecialidadesHabilitadas(){}
    public function imprimir(){}

}

$alumno1 = new Alumno();
$alumno1 -> nombre= "Juan S Ramos";
$alumno1 -> edad= 27;
$alumno1 -> dni="38051085";
$alumno1 -> nacionalidad= "argentina";
$alumno1 -> legajo=13;
$alumno1-> notaPhp="9";




print_r($alumno1);

?>