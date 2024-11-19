<?php
echo "<h1>Write a PHP script that compares two numbers and prints the larger number.</h1>";

echo "<h1>Solution: </h1>";


$firstNum = isset($_POST['f_num']) ? $_POST['f_num'] : "";
$secondNum = isset($_POST['l_num']) ? $_POST['l_num'] : "";
$result = "";

if(isset($_POST['submit'])){
    if($firstNum > $secondNum){
        $result = "Largest Number is: ".$firstNum;
    }else{
        $result = "Largest Number is: ".$secondNum;
    }
}

?>

<form method="post">
    <p>1st number</p>
    <input type="number" name="f_num">

    <p>2nd number</p>
    <input type="number" name="l_num">
    <br>
    <p>
        <button type="submit" name="submit">Submit</button>
    </p>

    <h1>
        <?php
           echo isset($result) ? $result : "";
        ?>
    </h1>
</form>