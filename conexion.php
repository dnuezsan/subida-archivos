<?php

require 'config.php';

class Conexion{

    protected $conexion;
    function __construct(){
         $this->conexion = new mysqli(SERVIDOR, USUARIO, CONTRASENIA, BD);
         if ($this->conexion->connect_errno) {
         echo 'Se produjo un error en la conexión';
        }
    }
}
?>