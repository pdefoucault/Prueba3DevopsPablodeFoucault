<!DOCTYPE html>
<html>

<head>
    <title>Bienvenido a PHP</title>
</head>

<body>
    <?php

    $mensaje = "Hola mundo";

    function mostrarMensaje() {
        echo "dentro de la función: $mensaje <br>";
    }

    mostrarMensaje();

    echo "fuera de la función: $mensaje <br>";

    ?>
</body>

</html>