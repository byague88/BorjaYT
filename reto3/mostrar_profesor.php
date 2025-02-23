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
        <p>Procedemos a mostrar todos los profesores de la base de datos profesores.</p>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Especialidad</th>
    </tr>
  </thead>
  <tbody>

        <?php
        require("alumnos.php");
        $sql = "SELECT * FROM profesores";
        $resultado= $connection->query($sql); //el conjunto de datos de la tabla profesores.
        if ($resultado->num_rows >0) {
            echo "<p>Perfecto, tenemos usuarios</p>";
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>
                    <td>" .$fila["nombre"]." </td>
                    <td>" .$fila["apellido"]." </td>
                    <td>" .$fila["correo"]. "</td>
                    <td>" .$fila["especialidad"]." </td>                
                </tr>";
            }
        }
        
        
        ?>
    </div>
</body>
</html>