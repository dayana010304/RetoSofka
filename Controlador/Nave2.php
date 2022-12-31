<?php
require '../Modelo/Nave.php';
require 'GuardarNave.php';

//Creamos la clase para la nave2 y agregamos un atributo unico (velocidad)
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

    public function getOrigen(){
        return $this->velocidad;
    }

    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
    }
}
//Creamos la consulta para guardar los datos de la nave2 y usamos la funcion de GuardarNave
if (isset($_POST["guardar"]))
{
    $nombre = $_POST["nombre"];
    $altura=$_POST["altura"];
    $peso=$_POST["peso"];
    $combustible = $_POST ["combustible"];
    $pais= $_POST["pais"];
    $velocidad= $_POST["velocidad"];
    $atributo = "Velocidad";
    $code = rand(10000, 99999);
    $transaccion = new GuardarNave();
    $consultaSQL="INSERT INTO vehiculos (nombre, altura, peso, combustible, pais, idRelacionVehiculo) VALUES ('$nombre', '$altura', '$peso', '$combustible', '$pais', '$code')";
    $consultaSQL2="INSERT INTO naves (idRelacional, tipoAtributo, atributo) VALUES ('$code' ,'$atributo', '$velocidad')";
    $transaccion->agregarDatos($consultaSQL);  
    $transaccion->agregarDatos($consultaSQL2);  
}


?>