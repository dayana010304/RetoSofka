<?php
require '../Modelo/Nave.php';

class Nave2 extends Nave{

    private $velocidad;

    public function __construct ($nombre, $altura, $peso, $combustible, $pais, $velocidad){
        $this->velocidad = $velocidad;
        $this->setNombre($nombre);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setCombustible($combustible);
        $this->setPais($pais);
    }

    

}


?>