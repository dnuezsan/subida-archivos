<?php

/* echo print_r($_FILES['archivo']); */
/* Devuelve el tamaño del archivo */
$tamaño = $_FILES['archivo']['size'];

/* basename() devuelve el último nombre de una ruta */
$archivo = 'img/'.basename($_FILES['archivo']['name']);

/* Obtener el tipo de archivo */
$tipo_archivo = pathinfo($archivo, PATHINFO_EXTENSION);

/* Nombre completo del archivo */
/* echo pathinfo($archivo, PATHINFO_BASENAME); */

/* Nombre del directorio */
/* echo pathinfo($archivo, PATHINFO_DIRNAME); */

/* Nombre final del archivo */
/* echo pathinfo($archivo, PATHINFO_FILENAME); */

/* Sube un archivo a un directorio */
if ($tamaño < 5000000) {

    if ($tipo_archivo == 'jpg' || $tipo_archivo == 'pdf') {
        
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo)) {
            echo 'Se ha guardado el archivo';
            
        }
        else {
            echo 'Se produjo un error al subir el archivo';
        }
    }else{
        echo 'El archivo debe ser un pdf o jpg';
    }

} else{
    echo 'El archivo es demasiado grande. Debe tener como máximo 5Mb';
}
?>