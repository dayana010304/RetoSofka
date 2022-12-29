<?php
require '../Modelo/Nave.php';

class Nave3 extends Nave{

    private $capacidad;

    public function __construct ($nombre, $altura, $peso, $combustible, $pais, $capacidad){
        $this->capacidad = $capacidad;
        $this->setNombre($nombre);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setCombustible($combustible);
        $this->setPais($pais);
    }

    

}


?>