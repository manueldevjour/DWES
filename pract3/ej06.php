<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $radio = $_POST["radio"];
            $altura = $_POST["altura"];

            echo "El volumen del cono, cuya radio es ", $radio, " y la altura ", $altura, ", es ", 
            (3.1415 * $radio * $radio * $altura) / 3;
        ?>
    </body>
</html>