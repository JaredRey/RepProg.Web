<?php
require ("conexion.php");

echo"<h1>Practica : Conexion a mi servidor de datos MYSL</h1><br><br>";
if($conexion=mysqli_connect($_server,$user,$pass,$bd))
{ echo"Tu conexion ha sido exitosa";
   }else{
       echo "Error de la conexion".mysqli_connect_error();
   }echo"<br><br>";
   mysqli_close($conexion);

//<?php
// require ("conexion.php");

// echo "<h1>Practica : Conexion a mi servidor de datos MYSQL</h1><br><br>";
// $conexion = mysqli_connect($host, $user, $pass, $bd);

// if ($conexion) {
//     echo "Tu conexion ha sido exitosa";
// } else {
//     echo "Error de la conexion: " . mysqli_connect_error();
// }

// echo "<br><br>";
// mysqli_close($conexion);
// ?>
