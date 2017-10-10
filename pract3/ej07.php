<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        $kilob = $_POST["kilob"];

        echo $kilob, " kilobytes son un total de ", $kilob / 1024, " megabytes.";
        ?>
    </body>
</html>