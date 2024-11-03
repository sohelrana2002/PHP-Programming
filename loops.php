<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
    <?php
        // while Loop
        $i = 1;
        while($i <= 6){
            echo "<br> $i";
            $i++;
        }

        // break statement 
        echo "<br>";
        $i = 1;
        while($i <= 6){
            if($i == 3) break;
            echo "<br> $i";
            $i++;
        }

        echo "<br>";
        $i = 1;
        while($i <= 6){
            echo "<br> $i";
            if($i == 3) break;
            $i++;
        }

        // continue statement 
        echo "<br>";
        $i = 0;
        while($i <= 6){
            $i++;
            if($i == 3) continue;
            echo "<br> $i";
        }

        echo "<br>";
        $i = 0;
        while($i <= 100){
            echo "<br> $i";
            $i = $i + 10;
        }


        // for Loop
        echo "<br>";
        $i = 0;
        for($i; $i <= 6; $i++){
            echo "<br> $i";
        }

        // foreach Loop on Arrays
        echo "<br>";
        // indexed array 
        $colors = array("red", "green", "yellow", "blue");

        foreach($colors as $c){
            echo "<br> $c";
        }


        // associative array 
        echo "<br>";
        $person = array("SOHEL" => 24, "FAHIM" => 23, "SABIT" =>22);

        foreach($person as $name => $age){
            echo "<br> Name: $name & Age: $age";
        }

        

    ?>
</body>
</html>