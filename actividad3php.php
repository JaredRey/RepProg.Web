<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 en php</title>
</head>
<body>
<?php
// Llamadas a las funciones con valores de ejemplo
operacionesMatematicas(40, 20);
evaluacionesCondicionales(15, 15);
operadoresAsignacion(10);
evaluacionLogica(10, 17);
unirCadenas("Jared", "Reyes");
function operacionesMatematicas($x, $y) {
    echo "<h2>Operaciones aritmeticas</h2>";
    echo "Valores iniciales: x = $x, y = $y<br>";
    echo "<b> Suma</b>: ($x + $y)  = " . ($x + $y) . "<br>";
    echo "<b> Resta</b>: ($x - $y) = " . ($x - $y) . "<br>";
    echo "<b> Multiplicación</b>: ($x * $y) = " . ($x * $y) . "<br>";
    echo "<b> División</b>: ($x / $y) = " . ($x / $y) . "<br>";
    echo "<b> Módulo</b>: ($x % $y)  = : " . ($x % $y) . "<br>";
    
    $x++;
    echo "<b>Incremento de x</b>: $x<br>";
    
    $y--;
    echo "<b>Decremento de y</b>: $y<br>";
}

// Condicionales
function evaluacionesCondicionales($a, $b) {
    echo "<h2>Operadores Condicionales</h2>";
    echo "Valores iniciales: a = $a, b = $b<br>";
    echo "¿a es igual a b? <b>R=</b> " . ($a == $b ? 'Sí' : 'No') . "<br>";
    echo "¿a es idéntico a b? <b>R=</b>" . ($a === $b ? 'Sí' : 'No') . "<br>";
    echo "¿a es distinto de b? <b>R=</b>" . ($a != $b ? 'Sí' : 'No') . "<br>";
    echo "¿a no es idéntico a b? <b>R=</b>" . ($a !== $b ? 'Sí' : 'No') . "<br>";
    echo "¿a es mayor que b? <b>R=</b>" . ($a > $b ? 'Sí' : 'No') . "<br>";
    echo "¿a es menor que b? <b>R=</b>" . ($a < $b ? 'Sí' : 'No') . "<br>";
    echo "¿a es mayor o igual a b? <b>R=</b>" . ($a >= $b ? 'Sí' : 'No') . "<br>";
    echo "¿a es menor o igual a b? <b>R=</b>" . ($a <= $b ? 'Sí' : 'No') . "<br>";
}

// Operadores de Asignación
function operadoresAsignacion($z) {
    echo "<h2>Operadores de Asignación</h2>";
    echo "Valor iniciales: z = $z <br>";

    $z += 5;
    echo "Asignación de suma (z += 5): $z<br>";

    $z -= 3;
    echo "Asignación de resta (z -= 3): $z<br>";

    $z *= 2;
    echo "Asignación de multiplicación (z *= 2): $z<br>";

    $z /= 4;
    echo "Asignación de división (z /= 4): $z<br>";

    $z %= 3;
    echo "Asignación de módulo (z %= 3): $z<br>";
}

// Operadores Lógicos
function evaluacionLogica($m, $n) {
    echo "<h2>Operadores Lógicos y de cadena</h2>";
    echo "Valores iniciales: m = $m, n = $n<br>";
    echo "¿m es mayor que 5 y n es menor que 10? " . (($m > 5 && $n < 10) ? 'Sí' : 'No') . "<br>";
    echo "¿m es mayor que 5 o n es menor que 3? " . (($m > 5 || $n < 3) ? 'Sí' : 'No') . "<br>";
    echo "¿No es cierto que m es menor que 5? " . (!($m < 5) ? 'Sí' : 'No') . "<br>";
}

// Concatenación
function unirCadenas($nombre, $apellido) {
    echo "<h2>Unir Cadenas</h2>";
    echo "Valores iniciales: nombre es $nombre, de apellido $apellido <br>";
    $nombreCompleto = $nombre . " " . $apellido;
    echo "Concatenación de nombre y apellido: $nombreCompleto<br>";

    $nombreCompleto .= " - Estudiante";
    echo "Asignación con concatenación: $nombreCompleto<br>";
}
?>
    
</body>
</html>