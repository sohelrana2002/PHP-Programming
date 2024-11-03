<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <?php
        function setAge($age = 40){
           echo "<br> Height is: $age";
        }

        setAge(23);
        setAge(25);
        setAge(20);
        setAge(30);
        setAge();

        function sum($x, $y){
            return $x + $y;
        }
        echo "<br>";

        echo "<br> 10 + 5 = " .sum(10, 5);
        echo "<br> 15 + 5 = " .sum(15, 5);
        echo "<br> 20 + 5 = " .sum(20, 5);

        function add_five($num){
           return $num+= 5;
        }

        echo "<br> " .add_five(2);

        // By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

        // The variadic function argument becomes an array.

        function sumMyNumbers(...$x){
            $n = 0;
            $len = count($x);

            for($i = 0; $i < $len; $i++){
                $n += $x[$i];
            }

            return $n;
        }

        echo "<br>Total Sum: " .sumMyNumbers(1, 2, 3, 4, 5)


    ?>
</body>
</html>