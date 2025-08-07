<?php
include_once 'conexionEstudiantes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' ){

 $id = $_POST['id'];
 $id = intval($id);
 $sql = "DELETE FROM estudiantes WHERE Id = $id";

    if (mysqli_query($conexion, $sql)) {
        //echo 'Usuario eliminado';
        $mensaje="Usuario se elimino pero con exito";
        header("location: FormularioEliminacion.html?parametro=" . urlencode($mensaje));
        exit();
    } else {
        echo 'Ups, el usuario no se pudo eliminar: ' . mysqli_error($conexion);
    }

mysqli_close($conexion);
exit();
}
?>