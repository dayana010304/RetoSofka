<?php
//Creamos funcion para conectanos a la base de datos 
function conectarBD()
    {
        //Datos necesarios para la conexion
        $conexion = null;
        $host = '127.0.0.1';
        $bd = 'sofka';
        $user = 'root';
        $pwd = '';
        try
        {   //Usamos metodo PDO
            $conexionBD=new PDO('mysql:host='.$host.';dbname='.$bd, $user, $pwd);
            return($conexionBD);
        }catch(PDOException $error){
            echo 'No se puede conectar a la base de datos';
            exit;
        }
        return $conexion;
    }

?>
