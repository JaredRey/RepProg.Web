<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 10 en php</title>
    <?php require ("phpFrom.php"); ?>
</head>
<body>
    <?php 
   $conexion = mysqli_connect(  $_server, $user, $pass, $bd);
   $consulta="Show databases";
   $resultado=mysqli_query($conexion, $consulta);

   echo "<table border=1>";
   echo "<td align=center> Listado de las bds </td>";
   while ($row=mysqli_fetch_array($resultado)){
       echo "<tr>";
       echo "<td>$row[0]</td>";
       echo "</tr>";       
   }
   echo"</table>";
   echo"<br>";
   echo"<br>";
   
   mysqli_free_result($resultado);
   mysqli_close($conexion);
   ?>
    
</body>
</html>