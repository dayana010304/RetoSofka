<?php
require '../Modelo/Nave.php';

class Nave4 extends Nave{

    private $tipoVehiculo;

    public function __construct ($nombre, $altura, $peso, $combustible, $pais, $tipoVehiculo){
        $this->tipoVehiculo = $tipoVehiculo;
        $this->setNombre($nombre);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setCombustible($combustible);
        $this->setPais($pais);
    }

    

}


?>