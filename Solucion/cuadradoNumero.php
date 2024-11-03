<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cuadrado del numero</title>

</head>
<body>

<h3> Escribe un programa que muestre en dos columnas:  Numero -  cuadrado del numero
De 10 números aleatorios entre 5 y 20.</h3>

    <?php
    echo "<table border='1'>";  // Creamos la tabla con borde de 1
    for ($i=0; $i < 10; $i++) {     // Bucle de 10 iteraciones para mostrar 10 números aleatorios
        $numero = rand(5,20);   // Generamos un número aleatorio entre 5 y 20
        echo "<tr>";    // Creamos una fila
        echo "<td>El numero aleatorio es: $numero </td>"; // Mostramos el número aleatorio
        echo "<td>El cuadrado del numero es: ".($numero*$numero)."</td>"; // Mostramos el cuadrado del número aleatorio 
        echo "</tr>"; // Cerramos la fila
            
    } // Cerramos el bucle

    
    ?>
    
</body>
</html>