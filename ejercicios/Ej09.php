<!DOCTYPE html>
<html>

<head>
    <title>Bienvenido a PHP</title>
</head>

<body>
    <?php

    $color = "azul";

    function mostrarColor() {
        $color = "rojo";
        echo "Dentro: " . $color . "<br>";
    }

    mostrarColor();
    echo "Fuera: $color <br>";

    ?>
</body>

</html>