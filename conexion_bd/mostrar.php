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
    <div class="container">
    <h1>conexion con base de datos</h1>
    <p>Procedemos a mostrar todos los usuario de la base de datos</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">email</th>
      <th scope="col">pass</th>
      <th scope="col">telefono</th>
    </tr>
  </thead>
  <tbody>

    <?php
    require("conexion.php");
    $sql = "SELECT * FROM alumnos";
    $resultado = $connection->query($sql);
    if ($resultado->num_rows > 0) {
        echo "<p>perfecto, tenemos usuarios</p>";
        while($fila = $resultado->fetch_assoc()){
            echo "<tr>
               <td>" .$fila["nombre"]."</td> 
               <td>" .$fila["email"]."</td> 
               <td>" .$fila["pass"]."</td> 
               <td>" .$fila["telefono"]."</td>             
            </tr>";
        }
     } 
    ?>
    </tbody>
</table>



  <tbody>
  
 

    </div>

</body>
</html>