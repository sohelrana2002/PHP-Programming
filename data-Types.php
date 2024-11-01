<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types In PHP</title>
</head>
<body>
    <?php
        /*---
        PHP supports the following data types:
            1. String
            2. Integer
            3. Float (floating point numbers - also called double)
            4. Boolean
            5. Array
            6. Object
            7. NULL
            8. Resource
        */


        //The var_dump() function returns the data type and the value
        $x=5;
        $name = "SOHEL RANA";

         var_dump( $x);
         echo "<br>";
         var_dump( $name);

        echo "<br>";
         $lang = array("C","C++", "JS");
         var_dump( $lang );

         //class and object in php

         class cars{
            public $color;
            public $model;
            public function __construct($color, $model){
                $this->color = $color;
                $this->model = $model;
            }

            public function message(){
                return "My Car is a " .$this->color ." & " .$this->model;
            }
         }

         $myCar = new cars("Red", "BMW");
         echo "<br>" .$myCar->message();
          echo "<br>";
         var_dump($myCar);


         //If you want to change the data type of an existing variable, but not by changing the value, you can use casting.
         echo "<br>";
         $z = 5;
         $z = (string) $z;
         var_dump( $z );
    ?>
</body>
</html>