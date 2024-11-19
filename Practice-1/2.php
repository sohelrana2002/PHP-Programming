<?php
echo "<h1>Write a PHP function to find the factorial of a given number.</h1>";

echo "<h1>Solution</h1>";

$factNum = isset($_POST['fact_num']) ? $_POST['fact_num'] : 0;

function factorial($num){
    if($num == 0 || $num == 1){
        return 1;
    }else{
        return $num * factorial($num - 1);
    }
};

if(isset($_POST['submit'])){
    $result = factorial($factNum);
}


?>

<form method="post">
    <p>Enter Factoril Number</p>
    <input type="number" name="fact_num">

    <button type="submit" name="submit">Submit</button>
    <h2>
        <?php
            echo isset($result) ? "The result is: ".$result : '';
        ?>
    </h2>
</form>