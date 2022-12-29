<?php

class Nave {

    private $nombre;
    private $altura;
    private $peso;
    private $combustible;
    private $pais;

    public function __construct($nombre, $altura, $peso, $combustible, $pais)
    {
        $this->nombre = $nombre;
        $this->altura = $altura;
        $this->peso = $$peso;
        $this->combustible = $combustible;
        $this->pais = $pais;

    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getCombustible(){
        return $this->combustible;
    }

    public function getPais(){
        return $this->pais;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function setCombustible($combustible){
        $this->combustible = $combustible;
    }

    public function setPais($pais){
        $this->pais = $pais;
    }
}

?>