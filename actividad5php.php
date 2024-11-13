<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5 en php</title>
</head>
<body>
    <?php 
    $dia="miercoles";
    switch($dia){
        case"lunes":
            echo"Hoy es Lunes";
            break;
        case"martes":
            echo"Hoy es Martes";
            break;
        case"miercoles":
            echo"Hoy es Miercoles";
            break;
        case"jueves":
            echo"Hoy es Jueves";
            break;
        case"viernes":
            echo"Hoy es Viernes";
            break;
        case"sabado":
            echo"Hoy es Sabado";
            break;
        case"domingo":
            echo"Hoy es Domingo";
            break;
        default:
    }
    ?>
    
</body>
</html>