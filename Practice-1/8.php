<?php
echo "<h1>Write a PHP script that creates an associative array with keys as fruit names and values as
their colors. Then print all key-value pairs.</h1>";

echo "<h1>Solution: </h1>";

echo "<br>";
$arr = array("Apple" => "Red", "Banana" => "Yellow");

foreach($arr as $fName => $fColor){
    echo "<h4>Fruit name: $fName & Fruit colors: $fColor </h4>";
}

?>

