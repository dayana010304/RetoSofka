<?php

require '../Modelo/Conexion/Conexion.php';

class GuardarNave {

    public function agregarDatos($consultaSQL){
        $conexionBD=$this->conectarBD();
 
        $consultaInsertarDatos= $conexionBD->prepare($consultaSQL);

        $resultado=$consultaInsertarDatos->execute();

        if ($resultado){
            echo("Registro agregado con exito");
        }else{
            echo("Error agregando el registro");
        }
    }
}

?>