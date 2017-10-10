<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $base = $_POST["base"];
            $altura = $_POST["altura"];

            echo "El área del triángulo de base ", $base, " y altura ", $altura, " es ", $base * $altura;
        ?>
    </body>
</html>