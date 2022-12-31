<?php
require '../Modelo/Nave.php';
require 'GuardarNave.php';

//Creamos la clase para la nave4 y agregamos un atributo unico (destino)
class Nave4 extends Nave{

    private $destino;

    public function __construct ($nombre, $altura, $peso, $combustible, $pais, $destino){
        $this->destino = $destino;
        $this->setNombre($nombre);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setCombustible($combustible);
        $this->setPais($pais);
    }
    public function getDestino(){
        return $this->destino;
    }

    public function setDestino($destino){
        $this->destino = $destino;
    }
}
//Creamos la consulta para guardar los datos de la nave4 y usamos la funcion de GuardarNave
if (isset($_POST["guardar"]))
{
    $nombre = $_POST["nombre"];
    $altura=$_POST["altura"];
    $peso=$_POST["peso"];
    $combustible = $_POST ["combustible"];
    $pais= $_POST["pais"];
    $destino= $_POST["destino"];
    $atributo = "Destino";
    $code = rand(10000, 99999);
    $transaccion = new GuardarNave();
    $consultaSQL="INSERT INTO vehiculos (nombre, altura, peso, combustible, pais, idRelacionVehiculo) VALUES ('$nombre', '$altura', '$peso', '$combustible', '$pais', '$code')";
    $consultaSQL2="INSERT INTO naves (idRelacional, tipoAtributo, atributo) VALUES ('$code' ,'$atributo', '$destino')";
    $transaccion->agregarDatos($consultaSQL);  
    $transaccion->agregarDatos($consultaSQL2);  
}


?>