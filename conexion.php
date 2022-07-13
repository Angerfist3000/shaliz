<?php

$servidor="localhost";
$usuario="root";
$password="";

// variable para la conexion
$conn=mysqli_connect($servidor,$usuario,$password);

// probar conexion
if(!$conn)
{
    die("Error en la conexion".mysqli_connect_error());
}
echo "Conexion realizada correctamente";

?>