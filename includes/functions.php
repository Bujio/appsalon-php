<?php

function obtener_servicios()
{
  try {
    //importar credenciales
    require "databases.php";

    //consulta SQL
    $sql = "SELECT * FROM servicios;";

    //realizar la consulta
    $query = mysqli_query($db, $sql); //$db sale del require que hacemos a databases.php
    return $query;
    //(opcional) cerrar la conexion
    mysqli_close($db);
  } catch (\Throwable $th) {
    var_dump($th);
  }
}

obtener_servicios();
