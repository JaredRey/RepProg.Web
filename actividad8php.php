<?php

require ("conexion.php");

echo"<h1> Practica 8: eliminacion de una base de datos</h1><br><br>";
$conexion=mysqli_connect("$_server","$user","$pass","$bd");
$basededatos="progweb";
$consultaecho="drop database $basededatos";

$consulta= "drop database $basededatos";
if($resultado=mysqli_query($conexion,$consulta)){
    echo "La base de datos $basededatos, se ha eliminado con exito<br>";
    echo"$consulta";
}
    else{
        echo "La base de datos $basededatos no se ha podido eliminar <br>".mysqli_error($conexion);
        echo"$consulta";
    }
    echo("<br><br>");
    mysqli_close($conexion);