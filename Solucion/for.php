<!DOCTYPE html>
<html lang="es">

<head>
    <title>for</title>
</head>

<body>

    <h3>Enunciado: Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for.</h3>

    <?php
    $numero = 0; // Inicializamos la variable

    for ($numero = 320; $numero >= 160; $numero -= 20) {    // Inicializamos la variable, mientras el número sea mayor o igual a 160, decrementamos de 20 en 20

        echo $numero . "<br>";  // Mostramos el número y un salto de línea
    } // Cerramos el bucle

    ?>


</body>

</html>