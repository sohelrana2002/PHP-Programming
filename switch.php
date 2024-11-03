<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch Statement</title>
</head>
<body>
    <?php
        //example
        $favColor = "blue";

        switch($favColor){
            case "red": {
                echo "Your favorite color is red";
                break;
            }
            case "blue": {
                echo "<br>Your favorite color is blue";
                break;
            }
            case "green": {
                echo "<br>Your favorite color is green";
                break;
            }
            
            default: {
                echo "<br>Never matched";
            }
        }


        // example
        $day = date("l");

        switch($day){
            case "Saturday": {
                echo "<br>Today is Saturday";
                break;
            }
            case "Sunday": {
                echo "<br>Today is Sunday";
                break;
            }
            case "Monday": {
                echo "<br>Today is Monday";
                break;
            }
            case "Tuesday": {
                echo "<br>Today is Tuesday";
                break;
            }
            case "Wednesday": {
                echo "<br>Today is Wednesday";
                break;
            }
            case "Thursday": {
                echo "<br>Today is Thursday";
                break;
            }
            default: {
                echo "<br>Today is Friday";
            }
        }

    ?>
</body>
</html>