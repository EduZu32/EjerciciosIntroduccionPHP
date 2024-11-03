<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tabla de multiplicar</title>

</head>

<body>

    <h3> Muestra la tabla de multiplicar de un número generado de manera aleatoria entre 1 y 10. El resultado en formato "table"</h3>
    <?php

    $numero = rand(1, 10);  // Generamos un número aleatorio entre 1 y 10
    echo "<table border='1'>"; // Creamos la tabla con borde 1
    for ($i = 1; $i <= 10; $i++) { // Bucle de 10 iteraciones
        echo "<tr>";   // Creamos una fila
        echo "<td>$numero</td>"; // Mostramos el número aleatorio
        echo "<td> x </td>"; // Mostramos la x de la multiplicación
        echo "<td> $i </td>"; // Mostramos el número de la iteración
        echo "<td> = </td>"; // Mostramos el igual de la multiplicación
        echo "<td>" . $numero * $i . "</td>"; // Mostramos el resultado de la multiplicación
        echo "</tr>"; // Cerramos la fila
    } // Cerramos el bucle
    ?>

</body>

</html>