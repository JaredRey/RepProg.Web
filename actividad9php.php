<?php

require ("conexion.php");

echo"<h1> Practica 9: Creacion de una tabla con conxion mediante php</h1><br><br>";
$conexion=mysqli_connect("$_server","$user","$pass","$bd");
$tabla="alumnos";
$consultaecho="CREATE TABLE $tabla ( <br>
        id INT AUTO_INCREMENT PRIMARY KEY, <br>
        nombre VARCHAR(200) NOT NULL UNIQUE, <br>
        carrera VARCHAR(200) NOT NULL UNIQUE, <br>
        escuela CHAR(100) NOT NULL <br>
    );";

$consulta= "CREATE TABLE $tabla (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(200) NOT NULL UNIQUE,
        carrera VARCHAR(200) NOT NULL UNIQUE,
        escuela CHAR(100) NOT NULL
    );";    
if($resultado=mysqli_query($conexion,$consulta)){
    echo "Se ha creado la tabla con exito $tabla <br> <br>";
    echo"$consultaecho";
}
    else{
        echo "La tabla $tabla no se ha podido crear con exito <br>".mysqli_error($conexion);
        echo"$consultaecho";
    }
    echo("<br><br>");
    mysqli_close($conexion);