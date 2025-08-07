<?php
$conexion = new mysqli("localhost", "root", "", "baseestudiantes");

$nombre = $_POST["nombre"];
$apellido = $_POST['apellido'];
$correo = $_POST["correo"];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];


$sql = "INSERT INTO Estudiantes (Nombre, Apellido, Correo, Direccion, Telefono, Sexo ) VALUES ('$nombre', '$apellido', '$correo', '$direccion', '$telefono', '$sexo')";

mysqli_query($conexion, $sql);

echo "Registro guardado correctamente.";


		?>
