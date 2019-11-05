<?php
  function conectar()
  {
    $user="ProyGraph";
    $pass="admin";
    $host="localhost";
    $db="proygraph";
    $con= mysqli_connect($host,$user,$pass);

    return $con;
  }

?>
