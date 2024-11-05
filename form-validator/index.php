<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submit</title>
    <link rel="stylesheet" href="style.css">
</head>


<?php
require "connection.php";


$name = "";
$email = "";
$password = "";

$nameError = "";
$emailError = "";
$passwordError = "";

if (isset($_POST["submit"])) {
    if ($_POST["name"] == "") {
        $nameError = "Name is required";
    } else {
        $name = $_POST["name"];
    }

    if ($_POST["email"] == "") {
        $emailError = "Email is required!";
    } else {
        $email = $_POST["email"];
    }

    if ($_POST["password"] == "") {
        $passwordError = "Password is required!";
    } else {
        $tempPass = $_POST["password"];

        if (strlen($tempPass) < 6) {
            $passwordError = "Password at least 6 character!";
        } else {
            $password = $tempPass;
        }
    }

    if (!$nameError && !$emailError && !$passwordError) {
        $query = "INSERT INTO formdata(name, email, password)
                VALUES('$name', '$email', '$password')";

        if (mysqli_query($conn, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);

?>

<body>
    <form method="post">
        <label for="">Name: </label>
        <input type="text" 
            placeholder="name" 
            name="name"
            value="<?php echo isset($name) ? $name : "" ?>"
        >
        <?php echo isset($nameError) ? $nameError : "" ?>

        <label for="">Email: </label>
        <input type="text" 
            placeholder="email" 
            name="email"
            value="<?php echo isset($email) ? $email : "" ?>"
        >

        <?php echo isset($emailError) ? $emailError : "" ?>

        <label for="">Password: </label>
        <input type="text" 
            placeholder="password" 
            name="password"
            value="<?php echo isset($password) ? $password : "" ?>"
        >
        <?php echo isset($passwordError) ? $passwordError : ""?>

        <input type="submit" name="submit">
    </form>
</body>

</html>