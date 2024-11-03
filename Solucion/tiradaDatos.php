
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tirada de dados</title>

</head>
<body>

<h3> Un programa que genere 2 tiradas de 3 dados (simulando 2 jugadores). 
Muestre las dos tiradas y me diga cual tiene mayor puntuación(sumando las tiradas)</h3>

    <?php
    $tirada1 = 0; // Inicializamos la variable de la tirada1 del jugador1  
    $tirada2 = 0; // Inicializamos la variable de la tirada2 del jugador2  
    $total1=0; // Inicializamos la variable de la suma de los dados del jugador1
    $total2=0;  // Inicializamos la variable de la suma de los dados del jugador2
    echo "<table border='4'>"; // Creamos la tabla con un borde de 4
    echo "<tr>";    // Creamos una fila
    echo "<td align='center''><h3><strong>Jugador 1</strong></h3></td>"; // Ponemos el texto en negrita y centrado del jugador 1
    echo "<td align='center''><h3><strong>Jugador 2</strong></h3></td>"; // Ponemos el texto en negrita y centrado del jugador 2
    echo "</tr>";   // Cerramos la fila

    for ($i=0; $i < 3; $i++) {    // Bucle de 3 iteraciones
        $tirada1 = rand(1,6);  // Generamos un número aleatorio entre 1 y 6
        $tirada2 = rand(1,6);   // Generamos un número aleatorio entre 1 y 6
        echo "<tr>";   // Creamos una fila
        echo "<td> Dado ".($i+1).": <img src='./dados/$tirada1.jpg'width=50 height=50 ></td>"; // Mostramos la imagen del dado en la columna del jugador 1 y el numero del los 3 dados
        echo "<td> Dado ".($i+1).": <img src='./dados/$tirada2.jpg' width=50 height=50></td>"; // Mostramos la imagen del dado en la columna del jugador 2 y el numero del los 3 dados
        echo "</tr>"; // Cerramos la fila
        $total1 += $tirada1; // Sumamos el total de los numero que han salido en los 3 dados del jugador 1
        $total2 += $tirada2;  // Sumamos el total de los numero que han salido en los 3 dados del jugador 2
        
        } // Cerramos el bucle
        
        echo "<tr>";    // Creamos una fila
        echo "<td colspan='2'>";    // Creamos una columna que ocupe las dos columnas
        if ($total1 > $total2) {   // Si el total de los dados del jugador 1 es mayor que el total de los dados del jugador 2
        echo "<strong>Jugador 1</strong> gana con una puntuación de ".$total1; // Mostramos que el jugador 1 ha ganado
        } elseif ($total2 > $total1) { // Si el total de los dados del jugador 2 es mayor que el total de los dados del jugador 1
        echo "<strong>Jugador 2</strong> gana con una puntuación de ".$total2; // Mostramos que el jugador 2 ha ganado
        } else {   // Si no se cumple ninguna de las condiciones anteriores 
        echo "<strong>Empate</strong> con una puntuación de ".$total1;   // Mostramos que ha habido un empate
        }   // Cerramos el condicional
        echo "</td>";   // Cerramos la columna
        echo "</tr>";  // Cerramos la fila
            
    
    ?>
    
</body>
</html>