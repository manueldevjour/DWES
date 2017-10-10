<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $a = $_POST["numbera"];
            $b = $_POST["numberb"];

            echo "La suma es ", $a + $b, "<br>";
            echo "La resta es ", $a - $b, "<br>";
            echo "La multiplicación es ", $a * $b, "<br>";
            echo "La división es ", $a / $b;
        ?>
    </body>
</html>