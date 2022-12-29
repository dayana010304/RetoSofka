<?php
require './Modelo/Conexion/Conexion.php';

class Consultar extends Conexion{
  public function consultarDatos($consultaSQL){

    $conexionBD=$this->conectarBD();

    $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    $consultaBuscarDatos->execute();

    return($consultaBuscarDatos->fetchAll());

  }
}

$transaccion= new Consultar();
$consultaSQL="SELECT * FROM vehiculos";
$vehiculo=$transaccion->consultarDatos($consultaSQL);
?>