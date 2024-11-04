<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
    <?php
        // Indexed Arrays
        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);

        echo "<br>";
        // $cars = array("Volvo", "BMW", "Toyota");
        // $cars[1] = "Ford";
        // var_dump($cars);

        echo "<br>";
        foreach ($cars as $x) {
            echo "$x <br>";
        };

        // array_push() function to add a new item, the new item will get the last index 
        array_push($cars, "Ford");
        echo "<br>";
        foreach ($cars as $x) {
            echo "$x <br>";
        };

        // Associative Arrays
        $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

        echo "<br>";
        foreach ($car as $x => $y) {
            echo "$x: $y <br>";
        }

        // Execute a function item:
        function myFunction() {
            echo "I come from a function!";
          }
          
          $myArr = array("Volvo", 15, myFunction);
          
          $myArr[2]();

        //   To remove an existing item from an array, you can use the array_splice() function.

        //   With the array_splice() function you specify the index (where to start) and how many items you want to delete.
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        array_splice($cars, 1, 2);
        var_dump($cars);

        // The array_pop() function removes the last item of an array.
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        array_pop($cars);
        var_dump($cars);

        // The array_shift() function removes the first item of an array.
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        array_shift($cars);
        var_dump($cars);

        // Sort Array in Ascending Order - sort()
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        sort($cars);

        foreach($cars as $c){
            echo "<br> $c";
        }

        echo "<br>";
        $numbers = array(4, 6, 2, 22, 11);
        sort($numbers);

        foreach($numbers as $n){
            echo "<br> $n";
        };

        // Sort Array in Descending Order - rsort()
        echo "<br>";
        $numbers = array(4, 6, 2, 22, 11);
        rsort($numbers);

        foreach($numbers as $n){
            echo "<br> $n";
        };

        // According to Value - asort()
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        asort($age);

        foreach($age as $k => $v){
            echo "<br> $k: $v";
        };

        // Descending to Value - arsort()
        echo "<br>";
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        arsort($age);

        foreach($age as $k => $v){
            echo "<br> $k: $v";
        };

        // Two-dimensional Arrays
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );

        for($i = 0; $i < 3; $i++){
            echo "<br>";
            for($j = 0; $j < 3; $j++){
                echo $cars[$i][$j] ." ";
            }
        }
    ?>
</body>
</html>