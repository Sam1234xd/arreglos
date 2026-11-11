<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arreglo de 50 números aleatorios</h1>

    <form method="POST" action="">

        <button type="submit" name="calcular">Generar y mostrar los tres mayores</button>

    </form>

    <hr>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {

        // Crear el arreglo
        $numeros = array();

        // Generar los 50 números aleatorios
        for ($i = 0; $i < 50; $i++) {

            $numeros[$i] = rand(1, 100);

        }

        // Imprimir los 50 números
        echo "<h3>Los 50 números del arreglo son:</h3>";

        for ($i = 0; $i < 50; $i++) {

            echo $numeros[$i];

            if ($i < 49) {
                echo ", ";
            }

        }
        // otro comentario
$mayor1 = $numeros[0];
$mayor2 = 0;
$mayor3 = 0;

for ($i = 1; $i < 50; $i++) {

    if ($numeros[$i] > $mayor1) {

        $mayor3 = $mayor2;
        $mayor2 = $mayor1;
        $mayor1 = $numeros[$i];

    } else if ($numeros[$i] > $mayor2) {

        $mayor3 = $mayor2;
        $mayor2 = $numeros[$i];

    } else if ($numeros[$i] > $mayor3) {

        $mayor3 = $numeros[$i];

    }

}

echo "<h3>Los tres números más grandes son:</h3>";

echo $mayor1 . "<br>";
echo $mayor2 . "<br>";
echo $mayor3 . "<br>";

    }

    ?>
</body>
</html>