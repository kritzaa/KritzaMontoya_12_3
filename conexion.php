<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$dbase ="nombrebase";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $dbase);

if (!$conexion) {
	
	+("Error al conectarme a la base de datos" . mysqli_connect_error());
} 

?>