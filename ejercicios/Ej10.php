<!DOCTYPE html>
<html>

<head>
    <title>Bienvenido a PHP</title>
</head>

<body>
    <?php

    function mostrarLlamadas() {
        static $contador = 0;
        $contador++;
        echo "Llamada " . $contador;
    }

    echo mostrarLlamadas() . "<br>";
    echo mostrarLlamadas() . "<br>";
    echo mostrarLlamadas() . "<br>";
    mostrarLlamadas();

    ?>
</body>

</html>