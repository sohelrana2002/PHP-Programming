<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <link rel="stylesheet" href="style.css">
</head>

<!-- -----php cod----  -->
<?php
require "connection.php";

$name = "";
$phone = "";
$email = "";
$password = "";

$nameError = "";
$phoneError = "";
$emailError = "";
$passwordError = "";

if (isset($_POST["registration"])) {
    // --name---
    if ($_POST["name"] == "") {
        $nameError = "Name is required.";
    } else {
        $name = $_POST["name"];
    }

    // ---phone---
    if ($_POST["phone"] == "") {
        $phoneError = "Phone is required.";
    } else if (strlen($_POST["phone"]) != 11) {
        $phoneError = "Phone number must be 11 digit";
    } else {
        $phone = $_POST["phone"];
    }

    // ---email---
    if ($_POST["email"] == "") {
        $emailError = "Email is required.";
    } else if (!strpos($_POST["email"], '@')) {
        $emailError = "Email Validation failed";
    } else {
        $email = $_POST["email"];
    }

    // ---password----
    if ($_POST["password"] == "") {
        $passwordError = "Password is required.";
    }else if(strlen($_POST["password"]) < 6){
        $passwordError = "Passwordat least 6 character";
    }else {
        $password = $_POST["password"];
    }

    // ----check if there is no error in input --
    if(!$nameError && !$phoneError && !$emailError && !$passwordError){
        $query = "INSERT INTO registration(name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";

        $res = mysqli_query($conn, $query);

        if($res){
            echo "Registration successfully!";
        }else{
            echo "Registration failed!";
        }
    }



}


?>


<body>

    <!-- ----navbar----  -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="index.html" class="logo">
                <p>PhoneBook</p>
            </a>

            <ul class="menu">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="registration.php">Registration</a>
                </li>
                <li>
                    <a href="addcontact.html">Add Contact</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="logout.html">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="registration__container">
            <form method="POST" class="form">
                <h2 class="heading">Registration</h2>

                <div class="form__box">
                    <!-- ----name---- -->
                    <input type="text" placeholder="Enter Your Name" name="name"
                        value="<?php echo isset($name) ? $name : "" ?>">

                    <!-- ---name error--- -->
                    <p class="text"><?php echo isset($nameError) ? $nameError : "" ?></p>

                    <!-- ---number ---  -->
                    <input type="text" placeholder="Enter Your Phone Number" name="phone"
                        value="<?php echo isset($phone) ? $phone : "" ?>">
                    <!-- ---number error---  -->
                    <p class="text"><?php echo isset($phoneError) ? $phoneError : "" ?></p>

                    <!----email ---  -->
                    <input type="email" placeholder="Enter Your Email" name="email"
                        value="<?php echo isset($email) ? $email : "" ?>">
                    <!-- ----email errror  ---  -->
                    <p class="text"><?php echo isset($emailError) ? $emailError : "" ?></p>

                    <!-- ----password--  -->
                    <input type="password" placeholder="Enter Your Password" name="password"
                        value="<?php echo isset($password) ? $password : "" ?>">

                    <!-- ---password error---  -->
                    <p class="text"><?php echo isset($passwordError) ? $passwordError : "" ?></p>
                </div>

                <button type="submit" name="registration" class="btn">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>