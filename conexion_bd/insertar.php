<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <h1>conexion con base de datos</h1>
    <p>Se procede a insertar el dato</p>

    <?php
    require("conexion.php");
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $telefono = $_POST['telefono'];
    $sql = "INSERT INTO alumnos (nombre, email, pass, telefono) VALUES ('".$nombre."', '".$email."', '".$pass."', '".$telefono."')";
    
    if ($connection->query($sql) === True) {
        echo "<p> inserccion del usuario " .$nombre . " correcta </p>";
    } else { 
        echo "<p> Fallo en la inserccion </p>";
    }
    $connection->close();
    ?>

    

</body>
</html>