<?php
echo "<h1>Write a PHP script that prints the multiplication table for a given number..</h1>";

echo "<h1>Solution: </h1>";

$mulNum = isset($_POST['mul_num']) ? $_POST['mul_num'] : 0;

function multiplicationTable($num){
    for($i = 1; $i <= 10; $i++){
        echo "<br>$num * $i = ".($num * $i);
    }
}

?>

<form method="post">
    <p>Enter your number: </p>
    <input type="number" name="mul_num">
    <button type="submit" name="submit">submit</button>

    <h2>
        <?php
           if(isset($_POST["submit"])){
            multiplicationTable($mulNum);
        }
        ?>
    </h2>
</form>