<!DOCTYPE html>
<html>

<head>
    <title>Bienvenido a PHP</title>
</head>

<body>
    <?php

    $mensaje = "Hola mundo";

    function mostrarMensaje() {
        global $mensaje;
        $mensaje .= " desde la función";
    }

    echo "Antes: $mensaje <br>";
    mostrarMensaje();
    echo "Después: $mensaje <br>";

    ?>
</body>

</html>