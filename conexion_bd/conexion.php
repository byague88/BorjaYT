<?php
  // se puede definir a variable de 3 formas, con $, con Define y con const.
  // con DEFINE y con CONST no se puede modificar, con DEFINE hay que definir con "" dobles.
  //  $username = "root";
  //  $password = "";
  //  $dbase = "instituto";
  //  %host = "localhost";

  define("username", "root");
  define("password", "");
  define("dbase", "instituto");
  define("host", "localhost");

  /*
  const username = "root";
  const password = "";
  const dbase = "instituto";
  const host = "localhost"; */

  $connection = new mysqli(host, username, password, dbase);
  if ($connection->connect_error) {
        echo "conexion erronea";
  } else { 
        echo "conexion realizada con exito";
  }

?>