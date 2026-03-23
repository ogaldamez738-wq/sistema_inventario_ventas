<?php
class Alumno {
    public $nombre;
    public $edad;
    public $seccion;
    public function mostrarDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Sección: " . $this->seccion . "<br>";
    }
}

$est1 = new Alumno(); 
$est1->nombre = "Carlos";
$est1->edad = 17;
$est1->seccion = "2DS";
$est1->mostrarDatos(); 
?>