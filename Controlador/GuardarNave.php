<?php

require '../Modelo/Conexion/Conexion.php';
require '../Estilos/script.php';

class GuardarNave{
    public function agregarDatos($consultaSQL){
        $conexionBD=conectarBD();
 
        $consultaInsertarDatos= $conexionBD->prepare($consultaSQL);

        $resultado=$consultaInsertarDatos->execute();

        if ($resultado === true){
            echo  '<script>
                        swal({
                        icon: "success",
                        title: "Felicidades",
                        text: "Registro guardado correctamente",
                        type: "success",
                        timer: 3000,
                        showConfirmButton: false
                        }).then(function(){
                            window.location = "../index.php";
                        });
                    </script>'; 
        }else{
            echo("Error agregando el registro");
        }
    }
}

?>