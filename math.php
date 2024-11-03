<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math</title>
</head>
<body>
    <?php
        // The pi() function returns the value of PI:
        echo "PI Values: " .pi();

        //get pi value using substr
        echo "<br> Using substr function: "  .substr(pi(), 0,6);

        //The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
        $arr = array(30, 20, 5, 10, 80);
        echo "<br>Min value from an array: " .min($arr);

        $arr = array(30, 20, 5, 10, 80);
        echo "<br>Max value from an array: " .max($arr);

        //The abs() function returns the absolute (positive) value of a number:
        $x = -6.5;
        echo "<br>Absolute value: " .abs($x);

        //The sqrt() function returns the square root of a number:
        $y = 64;
        echo "<br>64 square root: " .sqrt(64);

        //The round() function rounds a floating-point number to its nearest integer:
        echo "<br> 0.60 round: " .round(.60);
        echo "<br> 0.50 round: " .round(.50);
        echo "<br> 0.49 round: " .round(.49);
        echo "<br> -5.40 round: " .round(-5.40);
        echo "<br> -5.60 round: " .round(-5.60);

        // The rand() function generates a random number:
        echo "<br>Random value: " .rand();
        // if you want a random integer between 10 and 100 (inclusive), use rand(10, 100)
        echo "<br>Random value between 10 and 100: " .rand(10, 100);

    ?>
</body>
</html>