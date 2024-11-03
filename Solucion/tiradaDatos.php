
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tirada de dados</title>

</head>
<body>

<h3> Un programa que genere 2 tiradas de 3 dados (simulando 2 jugadores). 
Muestre las dos tiradas y me diga cual tiene mayor puntuación(sumando las tiradas)</h3>
    <?php
    $tirada1 = 0;
    $tirada2 = 0;
    $total1=0;
    $total2=0;
    echo "<table border='4'>";
    echo "<tr>";
    echo "<td align='center''><h3><strong>Jugador 1</strong></h3></td>";
    echo "<td align='center''><h3><strong>Jugador 2</strong></h3></td>";
    
    echo "</tr>";

    for ($i=0; $i < 3; $i++) { 
        $tirada1 = rand(1,6);
        $tirada2 = rand(1,6);
        echo "<tr>";
        echo "<td> Dado ".($i+1).": <img src='./dados/$tirada1.jpg'width=50 height=50 ></td>";
        echo "<td> Dado ".($i+1).": <img src='./dados/$tirada2.jpg' width=50 height=50></td>";
        echo "</tr>";
        $total1 += $tirada1;
        $total2 += $tirada2;
        
        }
        
        echo "<tr>";
        echo "<td colspan='2'>";
        if ($total1 > $total2) {
        echo "<strong>Jugador 1</strong> gana con una puntuación de ".$total1;
        } elseif ($total2 > $total1) {
        echo "<strong>Jugador 2</strong> gana con una puntuación de ".$total2;
        } else {
        echo "<strong>Empate</strong> con una puntuación de ".$total1;
        }
        echo "</td>";
        echo "</tr>";
            
    
    ?>
    
</body>
</html>