<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String in PHP</title>
</head>

<body>
    <?php
    // ----------String Length----------
    // The PHP strlen() function returns the length of a string.
    $name = "MD SOHEL RANA";
    echo "Total string length: " .strlen($name);

    // ------------Word Count-------------
    // The PHP str_word_count() function counts the number of words in a string.
    echo "<br>";
    $institute = "Varendra University";
    echo "Total word count: ".str_word_count($institute);

    // -------PHP substr_count() Function--------
    // Count the number of times occurs in the string:
    echo "<br>";
    echo "word count: " .substr_count($name, "A");



    // -------Search For Text Within a String-----------
    /* ----
        1. The PHP strpos() function searches for a specific text within a string.

        2. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE
    ----*/
    echo "<br>";
    echo "character position: " .strpos($name, "RANA");
    echo "<br>" ."character position: ".strpos($name, "RISHI");//return false;


    // ---------Upper Case--------
    // The strtoupper() function returns the string in upper case
    echo "<br>";
    echo strtoupper($institute);

    // ---------Lower Case--------
    // The strtolower() function returns the string in lower case
    echo "<br>";
    echo strtolower($institute);

    // ---------Replace String--------
    // The PHP str_replace() function replaces some characters with some other characters in a string.
    echo "<br>";
    echo str_replace("University", "Varsity", $institute);


    // ---------Reverse a String--------
    // The PHP strrev() function reverses a string.
    echo "<br>";
    echo strrev($institute);


    // ---------Remove Whitespace--------
    // The trim() removes any whitespace from the beginning or the end
    echo "<br>";
    $x = "     Hello world!     ";
    echo trim($x);


    // ---------Convert String into Array--------
    /*The PHP explode() function splits a string into an array.

    The first parameter of the explode() function represents the "separator". The  "separator" specifies where to split the string*/
    echo "<br>";
    $y = explode(" ", $name);

    foreach($y as $k => $v) {
        echo $k ." ". $v ."<br>";
    }


    // -------------Slicing Strings---------
    // You can return a range of characters by using the substr() function.
    echo "<br>";
    echo substr($name, 3,5);



    ?>
</body>

</html>