<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
</head>
<body>
    <?php
        // To create a constant, use the define() function.
        //syntax:  define(name, value);
        // name: Specifies the name of the constant
        // value: Specifies the value of the constant
        define("pi", 3.1416);
        echo "pi: " .pi;

        // You can also create a constant by using the const keyword.
        const x =10;
        echo "<br>Constant value of x is: " .x;

        // Create an Array constant:
        define("cars", [
            "BMW",
            "TOYOTA",
            "MARUTI"
        ]);

        foreach(cars as $c){
            echo "<br>" .$c;
        }

    ?>
</body>
</html>