<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificación de Notas</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center; /* centra horizontalmente */
            align-items: center;     /* centra verticalmente */
        }

        .contenedor {
            text-align: center;
        }

        h2, h3 {
            color: #1a73e8;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input[type="text"], input[type="number"] {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #1a73e8;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #155ab6;
        }

        ul {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 20px auto 0;
            text-align: left;
        }

        li {
            margin-bottom: 10px;
        }

        .aprobado {
            color: green;
            font-weight: bold;
        }

        .reprobado {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Agregar Estudiante y Verificar Nota</h2>

    <form method="post">
        Nombre del estudiante:
        <input type="text" name="nombre" required>

        Nota:
        <input type="number" name="nota" required>

        <input type="submit" value="Agregar y Verificar">
    </form>

    <?php
    session_start();

    if (!isset($_SESSION["estudiantes"])) {
        $_SESSION["estudiantes"] = [];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $nota = $_POST["nota"];
        $_SESSION["estudiantes"][$nombre] = $nota;
    }

    if (!empty($_SESSION["estudiantes"])) {
        echo "<h3>Resultado de los estudiantes:</h3>";
        echo "<ul>";
        foreach ($_SESSION["estudiantes"] as $nombre => $nota) {
            if ($nota >= 60) {
                echo "<li class='aprobado'>$nombre aprobó con una nota de $nota.</li>";
            } else {
                echo "<li class='reprobado'>$nombre reprobó con una nota de $nota.</li>";
            }
        }
        echo "</ul>";
    }
    ?>
</div>

</body>
</html>
