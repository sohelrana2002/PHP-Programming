<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number in PHP</title>
</head>
<body>
    <?php
        //cast float to int
        $x = 255.65;
        $int_cast = (int)$x;
        echo "int cast: " .$int_cast;

        //cast string to int
        $y = "260.87";
        $string_cast = (int)$y;
        echo "<br> string cast: " .$string_cast;

    ?>
</body>
</html>