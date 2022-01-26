<?php

require 'config.php';
require 'fpdf/fpdf.php';

class Conexion extends FPDF{

    protected $conexion_bd;
    protected $pdf;

    function __construct(){
         $this->conexion_bd = new mysqli(SERVIDOR, USUARIO, CONTRASENIA, BD);
         if ($this->conexion_bd->connect_errno) {
         echo 'Se produjo un error en la conexión';
        }
        $this->pdf = new FPDF();
    }

}
?>