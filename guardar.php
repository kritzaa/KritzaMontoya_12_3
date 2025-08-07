<?php
$conexion = new mysqli("localhost", "root", "", "nombrebase");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];

$sql = "INSERT INTO usuarios (usuario, correo, pass) VALUES ('$nombre', '$email', '$contrasena')";

mysqli_query($conexion, $sql);

echo "Registro guardado correctamente.";


		?>
