<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $horas = $_POST["htrab"];

            echo "El sueldo de esta semana, en base a 12 euros por hora, será de ", $horas * 12, "€";
        ?>
    </body>
</html>