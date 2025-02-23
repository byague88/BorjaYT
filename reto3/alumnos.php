<?php
    const username = "root";
    const password = "";
    const dtbase = "reto3";
    const host = "localhost";

    $connection = new mysqli(host, username, password, dtbase);
    if ($connection->connect_error) {
        echo "<p>Conexion errónea</<p>";
    } else { "<p>conexión realizada con éxito.</p>";
    }
?>