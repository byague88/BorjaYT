<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="fs-1 text-center m-4 text-white bg-primary border border-primary-subtle rounded-3">Conexión con base de datos</h1>
        <p> Se procede a insertar datos </p>
        <?php
        require("alumnos.php");
        $nombre_profesor = $_POST['nombre_profesor'];
        $apellido_profesor = $_POST['apellido_profesor'];
        $correo_profesor = $_POST['correo_profesor'];
        $especialidad = $_POST['especialidad'];

    
        $sql = "INSERT INTO profesores (nombre, apellido, correo, especialidad) VALUES ('".$nombre_profesor."','".$apellido_profesor."','".$correo_profesor."','".$especialidad."')";
        if ($connection->query($sql)=== true) {
            echo "<p>Inserccion del profesor ".$nombre_profesor." correcta</p>";
        } else { echo "<p>fallo en la inserccion</p>";
        }
        $connection->close();
        ?>
    </div>
</body>
</html>