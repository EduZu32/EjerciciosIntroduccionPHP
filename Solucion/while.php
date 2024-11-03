<!DOCTYPE html>
<html lang="es">

<head>
    <title>while</title>
</head>

<body>
    
    <h3>Enunciado: Muestra los números múltiplos de 5 de un bucle de 0 a 100 utilizando while.</h3>

    <?php
    $number = 0; // Inicializamos la variable

    while ($number <= 100) { // Mientras el número sea menor o igual a 100 se ejecuta el bucle
        if ($number % 5 == 0) { // Condición para saber si el número es múltiplo de 5 y mostrarlo
            echo $number . "<br>";  // Mostramos el número múltiplo de 5
        }
        $number++;  // Incrementamos el número en 1 para seguir con la siguiente iteración
    } // Cerramos el bucle
    ?>

</body>

</html>