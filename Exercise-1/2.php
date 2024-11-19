<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Create a web page with two input fields for numbers and five buttons for performing arithmetic
        operations: addition, subtraction, multiplication, division, and modulus. Use php to validate the inputs,
        ensuring both are numeric value. When the user clicks a button, perform the corresponding operation
        and display the result.
    </h3>

    <h3>Solution: </h3>

    <?php
    $fNum = isset($_POST['f_num']) ? $_POST['f_num'] : "";
    $sNum = isset($_POST['s_num']) ? $_POST['s_num'] : "";


    $result = "";

    // -----addition ----
    if (isset($_POST['add'])) {
        if (
            is_numeric( $fNum) &&
            is_numeric($sNum)
        ) {
            $result = "$fNum + $sNum = " .($fNum + $sNum);
        } else {
            $mess = "It's not numeric";
        }
    }


    // -----subtraction ----
    if (isset($_POST['sub'])) {
        if (
            is_numeric( $fNum) &&
            is_numeric($sNum)
        ) {
            $result = "$fNum - $sNum = " .($fNum - $sNum);
        } else {
            $mess = "It's not numeric";
        }
    }

    // -----multiplication ----
    if (isset($_POST['mul'])) {
        if (
            is_numeric( $fNum) &&
            is_numeric($sNum)
        ) {
            $result = "$fNum * $sNum = " .($fNum * $sNum);
        } else {
            $mess = "It's not numeric";
        }
    }

    // -----division ----
    if (isset($_POST['division'])) {
        if (
            is_numeric( $fNum) &&
            is_numeric($sNum)
        ) {
            $result = "$fNum / $sNum = " .($fNum / $sNum);
        } else {
            $mess = "It's not numeric";
        }
    }

    // -----modulus ----
    if (isset($_POST['modulus'])) {
        if (
            is_numeric( $fNum) &&
            is_numeric($sNum)
        ) {
            $result = "$fNum % $sNum = " .($fNum % $sNum);
        } else {
            $mess = "It's not numeric";
        }
    }


    ?>



    <form method="post">
        <p>First Number: </p>
        <input type="text" name="f_num">

        <p>Second Number: </p>
        <input type="text" name="s_num">

        <button type="submit" name="add">Addition</button>
        <button type="submit" name="sub">Subtraction</button>
        <button type="submit" name="mul">Multiplication</button>
        <button type="submit" name="division">Division</button>
        <button type="submit" name="modulus">Modulus</button>
    </form>

    <p>
        <?php echo isset($mess) ? $mess : "" ?>
        <?php echo isset($result) ? $result : "" ?>
    </p>



</body>

</html>