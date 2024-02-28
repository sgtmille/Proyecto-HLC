<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "hlc";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if($conexion) {
    echo "conectao";
} else {
    echo "no conectao";
}


?>