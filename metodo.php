<?php

require 'conexion.php';

class Metodo extends Conexion
{

    protected $controlador;

    function __construct()
    {
        $conexion = new Conexion();
    }

    function galeriaImagenes()
    {
        $directorio = 'img';
        $objetoDir = dir($directorio);
        if ($objetoDir) {
            echo "<table>";
            echo "<tr>";

            while ($archivo = $objetoDir->read()) {

                echo "<td><div><img src=img/" . $archivo . " alt='" . $archivo . "'></div></td>";
            }
            echo "</tr>";
            echo "</table>";
            $objetoDir->close();
        } else {
            echo 'No se ha podido acceder a las imágenes';
        }
    }

    function nombres()
    {
        $directorio ='img';
        $objetoDir = dir($directorio);
        if ($objetoDir) {
            echo "<table>";
            echo "<tr>";

            while ($archivo = $objetoDir->read()) {

                echo "<td>".$archivo."</td>";
            }
            echo "</tr>";
            echo "</table>";
            $objetoDir->close();
        } else {
            echo 'No se ha podido acceder a las imágenes';
        }
    }
}
