<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tabla de multiplicar</title>

</head>

<body>

    <h3> Muestra la tabla de multiplicar de un número generado de manera aleatoria entre 1 y 10. El resultado en formato "table"</h3>
    <?php
    $numero = rand(1, 10);
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td> x </td>";
        echo "<td> $i </td>";
        echo "<td> = </td>";
        echo "<td>" . $numero * $i . "</td>";
        echo "</tr>";
    }
    ?>

</body>

</html>