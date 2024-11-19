<?php
echo "<h1>Write a PHP script that prints all prime numbers between two given numbers.</h1>";

echo "<h1>Solution: </h1>";

$arr = range(1, 100);

for ($i = 0; $i < 100; $i++) {

    $prime = true;
    for ($j = 1; $j < 100; $j++) {
        if ($i != $j && $arr[$i] % $arr[$j] == 0) {
            $prime = false;
        }
    }

    if ($prime)
        echo $arr[$i] . "</br>";
}

?>