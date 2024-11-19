<?php

require ("conexion.php");

echo"<h1> Practica: Creacion de una base de datos</h1><br><br>";
$conexion=mysqli_connect("$_server","$user","$pass","$bd");
$basededatos="progweb";

$consulta= "Create database $basededatos";
if($resultado=mysqli_query($conexion,$consulta)){
    echo "La base de datos $basededatos, se creo con exito<br>";
}
    else{
        echo "La base de datos $basededatos no se ha podido crear <br>".mysqli_error($conexion);
    }
    echo("<br><br>");
    mysqli_close($conexion);