<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cuadrado del numero</title>

</head>
<body>

<h3> Escribe un programa que muestre en dos columnas:  Numero -  cuadrado del numero
De 10 números aleatorios entre 5 y 20.</h3>
    <?php
    echo "<table border='1'>";
    for ($i=0; $i < 10; $i++) { 
        $numero = rand(5,20);
        echo "<tr>";
        echo "<td>El numero aleatorio es: $numero </td>";
        echo "<td>El cuadrado del numero es: ".($numero*$numero)."</td>";
        echo "</tr>";
            
    }

    
    ?>
    
</body>
</html>