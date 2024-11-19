<?php
echo "<h1><pre>Write a PHP script that:
Creates an array with the numbers from 1 to 10.
Prints the sum of the array elements.
Prints the highest and lowest numbers in the array</pre></h1>";

echo "<h1>Solution: </h1>";

$arr = range(1, 10);

$sum = 0;
for ($i = 0; $i < 10; $i++) {
    $sum += $arr[$i];
}

echo "Sum: " .$sum;

echo "<br>Highest  num: ".max($arr);
echo "<br>Lowest  num: ".min($arr);



?>