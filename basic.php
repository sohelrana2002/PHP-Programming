<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic of PHP</title>
</head>

<body>
    <?php
    //there are two types to show to output 
    //1. echo and 2. print
    
    echo "Hello world!";
    print "<br> Hello world from print";

    //difference between echo and print
    //in print method it is not possible when we are trying to show two     string using coma
    //print "I'm SOHEL RANA", "From rajshahi";
    echo "<br> I'm SOHEL RANA", " From Rajshahi";

    /*
        -----Declaring Variables---------
        In PHP, a variable starts with the $ sign, followed by the name of the variable

            1. A variable starts with the $ sign, followed by the name of the variable

            2. A variable name must start with a letter or the underscore character

            3. A variable name cannot start with a number

            4. A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )

            5. Variable names are case-sensitive ($age and $AGE are two different variables)
    */

    $name = "SOHEL RANA";//string type
    $age = 25;//integer type
    $dept = "CSE";// string type
    $institute = "Varendra University";
    $cGPA = 3.90;//float type
    $result = true;//boolean type
    

    //how to access the Variables
    echo "<br>Name: " . $name;
    echo "<br>Age: " . $age;
    echo "<br>Department: " . $dept;
    echo "<br>Institute Name: " . $institute;
    echo "<br>C-GPA: " . $cGPA;
    if ($result) {
        echo "<br>Result: Pass";
    } else {
        echo "<br>Result: Failed";
    }
    ;


    /*PHP Variables Scope
        PHP has three different variable scopes:
            1. local
            2. global
            3. static
    */
    //Variable with global scope
    
    $x = 10;//global scope
    
    function myFun()
    {
        // using x inside this function will generate an error
        // echo "<p>Variable x inside function is: $x</p>";
    }
    ;

    myFun();

    //Variable with local scope
    function myTest()
    {
        $y = 5; // local scope
        echo "<p>Variable x inside function is: $y</p>";
    }
    myTest();

    // using x outside the function will generate an error
    // echo "<p>Variable x outside function is: $y</p>";
    

    /*---
        The global keyword is used to access a global variable from within a function.
        To do this, use the global keyword before the variables (inside the function)
    ---*/
    $a = 5;
    $b = 10;

    function sum(){
        global $a, $b;
        return $a + $b;
    }

    $c = sum();
    echo "sum: ".$c;

    /*---
    PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
    ----*/
    $i=5;
    $j=20;

    function globalIndex(){
        $GLOBALS['j'] = $GLOBALS['i'] + $GLOBALS['j'];
    }
    globalIndex();

    echo '<br>Glogal variable y values: '.$j;
    ?>
</body>

</html>