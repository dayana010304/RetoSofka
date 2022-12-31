<?php

require '../Modelo/Conexion/Conexion.php';
require '../Estilos/script.php';

class GuardarNave{
    //Creamos funcion para guardar los datos en la base de datos, usamos la conexion que creamos en el modelo
    public function agregarDatos($consultaSQL){
        $conexionBD=conectarBD();
 
        $consultaInsertarDatos= $conexionBD->prepare($consultaSQL);

        $resultado=$consultaInsertarDatos->execute();

        if ($resultado === true){
            // Si los datos se guardar correctamente, se habilita un alert
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