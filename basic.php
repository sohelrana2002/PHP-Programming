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

        $name= "SOHEL RANA";//string type
        $age = 25;//integer type
        $dept = "CSE";// string type
        $institute = "Varendra University";
        $cGPA = 3.90;//float type
        $result = true;//boolean type


        //how to access the Variables
        echo "<br>Name: " .$name;
        echo "<br>Age: " .$age;
        echo "<br>Department: " .$dept;
        echo "<br>Institute Name: " .$institute;
        echo "<br>C-GPA: " .$cGPA;
        if($result){
            echo "<br>Result: Pass";
        }else{
            echo "<br>Result: Failed";
        };

    ?>
</body>

</html>