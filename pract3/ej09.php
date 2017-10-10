<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 9</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $radio = $_POST["radio"];

            echo "El área del círculo de radio ", $radio, " es ", (3.1415 * pow($radio, 2));
        ?>
    </body>
</html>