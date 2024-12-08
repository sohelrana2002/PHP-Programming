<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="style.css">
</head>

<!-- -----php code----  -->
<?php
session_start();
require "connection.php";

if (isset($_POST['login'])) {
    $phone = isset($_POST['number']) ? $_POST['number'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    $query = "SELECT * FROM registration WHERE phone = '$phone' AND password ='$password'";

    $res = mysqli_query($conn, $query);
    $num = mysqli_num_rows($res);


    $loginMessage = "";
    if ($num == 1) {
        $loginMessage = "Login successfully";

        $_SESSION['color'] = "red";
        header("Refresh: 1; url=index.html");
        
        // ---get phone and create it as session variable--- 
        $getPhone = mysqli_fetch_array($res);
        $result = $getPhone["phone"];
    
        $_SESSION['phone'] = "$result";
    } else {
        $loginMessage = "Login failed.";
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

    <!-- session checking  -->
    <!-- style="background : <?php echo $_SESSION['color'] ?>" -->

    <div class="container">
        <div class="registration__container">
            <form method="POST" class="form">
                <h2 class="heading">Login</h2>

                <div class="form__box">
                    <input type="text" placeholder="Enter Your Phone Number" name="number">
                    <input type="password" placeholder="Enter Your Password" name="password">
                </div>

                <p class="text"><?php echo isset($loginMessage) ? $loginMessage : "" ?></p>

                <button type="submit" name="login" class="btn">Log In</button>
            </form>
        </div>
    </div>
</body>

</html>