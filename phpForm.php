<?php
require ("conexion.php");

$conexion=mysqli_connect("$_server","$user","$pass","$bd");


$nombre=$_POST['nombre'];
$carrera=$_POST['carrera'];
$escuela=$_POST['escuela'];

$consulta = "INSERT INTO alumnos (nombre, carrera, escuela) VALUES ('$nombre', '$carrera', '$escuela')";

if ($resultado=mysqli_query($conexion,$consulta)){
    echo "Registro guardado con exito";
} else {
    echo "no salio con exito";
}