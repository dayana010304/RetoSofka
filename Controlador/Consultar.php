<?php
class Consultar{
  public function consultarDatos($consultaSQL){

    $conexionBD=$this->conectarBD();

    $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    $consultaBuscarDatos->execute();

    return($consultaBuscarDatos->fetchAll());

  }
}

?>