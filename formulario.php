<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actividad 11</title>
    <?php //require "../db/code-login.php"  ?>
</head>
<body>
    <div>
    <form action="phpForm.php" method="POST">
        <h1>Registro de alumno</h1>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" require><br> <br>

        <label for="carrera">Carrera:</label>
            <input type="text" id="carrera" name="carrera" require><br> <br>

        <label for="escuela">Escuela de procedencia:</label>
            <input type="text" id="escuela" name="escuela" require><br> <br>

        <label for="submit"><input type="submit"> </label>
    </form>  
    </div>
</body>
</html>