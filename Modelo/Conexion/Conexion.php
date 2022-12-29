<?php

class Conexion
/*
{
    protected $conexionBD;

    public function __construct()
    {
        try
        {
            $this->conexionBD = new PDO('mysql:host=localhost;dbname=naves','root','');
            $this->conexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexionBD->exec('SET CHARACTER SET utf8');
            echo 'Conexion establecida';
            return $this->conexionBD;
        }catch(Exception $e){
            echo($e->getMessage());
        }
    }
}
*/
{
    public $navesBD="root";
    public $passwordBD="";

    public function __construct(){}

    public function conectarBD()
    {
        try
        {
            $infoDB="mysql:host=localhost;dbname=naves";
            $conexionBD=new PDO($infoDB, $this->navesBD,$this->passwordBD);
            return($conexionBD);
        }catch(PDOException $error){
            echo($error->getMessage());
        }
    }
}
?>
