<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 8</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $numbera = $_POST["numbera"];
            $numberb = $_POST["numberb"];

            echo "El número aleatorio entre los dos que has puesto es ", rand($numbera, $numberb);
        ?>
    </body>
</html>