<?php
require '../Modelo/Nave.php';
require 'GuardarNave.php';

//Creamos la clase para la nave3 y agregamos un atributo unico (capacidad)
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
    public function getCapacidad(){
        return $this->capacidad;
    }

    public function setCapacidad($capacidad){
        $this->capacidad = $capacidad;
    }
}
//Creamos la consulta para guardar los datos de la nave3 y usamos la funcion de GuardarNave
if (isset($_POST["guardar"]))
{
    $nombre = $_POST["nombre"];
    $altura=$_POST["altura"];
    $peso=$_POST["peso"];
    $combustible = $_POST ["combustible"];
    $pais= $_POST["pais"];
    $capacidad= $_POST["capacidad"];
    $atributo = "Capacidad";
    $code = rand(10000, 99999);
    $transaccion = new GuardarNave();
    $consultaSQL="INSERT INTO vehiculos (nombre, altura, peso, combustible, pais, idRelacionVehiculo) VALUES ('$nombre', '$altura', '$peso', '$combustible', '$pais', '$code')";
    $consultaSQL2="INSERT INTO naves (idRelacional, tipoAtributo, atributo) VALUES ('$code' ,'$atributo', '$capacidad')";
    $transaccion->agregarDatos($consultaSQL);  
    $transaccion->agregarDatos($consultaSQL2);  
}


?>