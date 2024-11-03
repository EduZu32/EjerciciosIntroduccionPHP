<!DOCTYPE html>
<html lang="es">

<head>
    <title>while</title>
</head>

<body>
    
    <h3>Enunciado: Muestra los números múltiplos de 5 de un bucle de 0 a 100 utilizando while.</h3>

    <?php
    $number = 0;

    while ($number <= 100) {
        if ($number % 5 == 0) {
            echo $number . "<br>";
        }
        $number++;
    }
    ?>

</body>

</html>