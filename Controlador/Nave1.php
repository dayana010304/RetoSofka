<?php
require '../Modelo/Nave.php';
require 'GuardarNave.php';

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
    public function getOrigen(){
        return $this->origen;
    }

    public function setOrigen($origen){
        $this->origen = $origen;
    }

}

if (isset($_POST["guardar"]))
{
    $nombre = $_POST["nombre"];
    $altura=$_POST["altura"];
    $peso=$_POST["peso"];
    $combustible = $_POST ["combustible"];
    $pais= $_POST["pais"];
    $origen= $_POST["origen"];
    $atributo = "Origen";
    $code = rand(10000, 99999);
    $transaccion = new GuardarNave();
    $consultaSQL="INSERT INTO vehiculos (nombre, altura, peso, combustible, pais, idRelacionVehiculo) VALUES ('$nombre', '$altura', '$peso', '$combustible', '$pais', '$code')";
    $consultaSQL2="INSERT INTO naves (idRelacional, tipoAtributo, atributo) VALUES ('$code' ,'$atributo', '$origen')";
    $transaccion->agregarDatos($consultaSQL);  
    $transaccion->agregarDatos($consultaSQL2);  
}
?>