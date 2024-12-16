<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    print "<hr>";
    print "<p><b>V University</b></p>";
    print "hello";
    print "Welcome";



    print "<br>";
    print "<p class='center'>Web lab</p>";
    print "<hr>";
    print "<p class='center'><b>Welcome to php code</b></p>";
    print "<br>";



    echo ("<hr>");
    echo ("<p><b>V University</b></p>");
    echo "hello<br/>";
    echo "One", "Two", "Three";


    echo "<br>";
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
    $z = true;
    $w = null;
    echo $txt;
    echo "<br>";
    echo $x;
    echo "<br>";
    echo "$x";
    echo "<br>";
    echo $y;
    echo "<br>";
    echo $z;
    echo "<br>";
    echo $w;


    echo "<br>";
    // case-sensitive constant name
    define("GREETING", "Welcome to VU!");
    echo GREETING;
    echo "<br>";
    echo "GREETING"; // not as variable it will print the string
    


    define("GREETING2", "Welcome to W3Schools.com!");
    function myTest()
    {
        echo "<br>" . GREETING2;
    }
    myTest();



    echo "<br>";
    function setHeight($minheight = 50)
    {
        echo "The height is : $minheight <br>";
    }
    setHeight(350);
    setHeight(); //if there is no default it will cause error. setHeight(135);
    setHeight(80);


    echo "<br>";
    $x = 5985;
    var_dump($x);


    echo "<br>";
    $age = array("35", "37", "43");
    foreach ($age as $x) {
        echo $x;
        echo "<br>";
    }
    ?>

</body>

</html>