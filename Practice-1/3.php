<?php
echo "<h1>Write a PHP script to reverse a string.</h1>";

echo "<h1>Solution: </h1>";

$userString = isset($_POST['user_string']) ? $_POST['user_string'] : "";

function reverseString($s){
    return strrev($s);
}

if(isset($_POST['submit'])){
    $result = reverseString($userString);
}

?>

<form method="post">
    <p>Enter a string</p>
    <input type="text" name="user_string">

    <button type="submit" name="submit">submit</button>

    <h2>
        <?php
           echo isset($result) ? "Reverse String: ".$result : "";
        ?>
    </h2>
</form>