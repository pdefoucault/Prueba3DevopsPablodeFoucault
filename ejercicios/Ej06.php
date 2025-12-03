<!DOCTYPE html>
<html>

<head>
    <title>Bienvenido a PHP</title>
</head>

<body>
    <?php

    $num = "42";

    echo "antes: ";
    var_dump($num);

    $num = (int)$num + 8;

    echo " <br> después: ";
    var_dump($num);

    ?>
</body>

</html>