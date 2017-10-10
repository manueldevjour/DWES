<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $euros = $_POST["euros"];

            echo $euros, "€ son ", $euros * 166.386, " pesetas."
        ?>
    </body>
</html>