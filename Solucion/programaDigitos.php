<!DOCTYPE html>
<html lang="es">
<head>
    <title>ProgramaDigitos</title>

</head>
<body>

<h3> Realiza un programa que nos diga cuántos dígitos tiene un número aleatorio entre (0 y 9999). Mostrar el número y la cantidad de dígitos</h3>

    <?php
    $numero = rand(0,9999);  // Generamos un número aleatorio entre 0 y 9999
    echo "El numero aleatorio es: $numero <br>"; // Mostramos el número aleatorio
    echo "El numero de digitos es: ".strlen($numero); // Mostramos la longitud del número aleatorio
    ?>
    
</body>
</html>