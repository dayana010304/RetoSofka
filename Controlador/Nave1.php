<?php
require '../Modelo/Nave.php';

class Nave1 extends Nave{

    private $origen;

    public function __construct ($nombre, $altura, $peso, $combustible, $pais, $origen){
        $this->origen = $origen;
        $this->setNombre($nombre);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setCombustible($combustible);
        $this->setPais($pais);
    }

}


?>