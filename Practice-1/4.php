<?php
echo "<h1>Write a PHP script that counts how many times a particular character appears in a string.
</h1>";

echo "<h1>Solution: </h1>";

$userString = isset($_POST['user_string']) ? $_POST['user_string'] : '';
$searchChar = isset($_POST['search_char']) ? $_POST['search_char'] : '';

function searchFun($s, $c) {
    return substr_count($s, $c);
}

if(isset($_POST['submit'])) {
    $result = searchFun($userString, $searchChar);
}

?>

<form method="post">
    <p>Enter a string: </p>
    <input type="text" name="user_string">
    <p>Search character: </p>
    <input type="text" name="search_char">

    <button type="submit" name="submit">Submit</button>

    <h2>
        <?php
           echo isset($result) ? "Total count : ".$result : "";
        ?>
    </h2>
</form>