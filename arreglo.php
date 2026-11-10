<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arreglo de 50 números aleatorios</h1>

    <?php

    // Crear el arreglo
    $numeros = array();

    // Generar 50 números aleatorios
    for ($i = 0; $i < 50; $i++) {
        $numeros[$i] = rand(1, 100);
    }

    // Imprimir los números separados por comas
    for ($i = 0; $i < 50; $i++) {

        echo $numeros[$i];

        if ($i < 49) {
            echo ", ";
        }
    }

    ?>
</body>
</html>