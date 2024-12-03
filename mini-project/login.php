<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
require "connection.php";
session_start();

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];

    $query = "SELECT * FROM registration WHERE name = '$name' AND id = '$id' ";

    $res = mysqli_query($conn, $query);
    $num = mysqli_num_rows($res);
    
    if ($num == 1) {
        echo "Login successfully";
        $_SESSION['color'] = "red";
    } else {
        echo "Login failed.";
    }
}


?>

<body style="background: <?php echo $_SESSION['color'] ?>">
    <form method="post" class="login__container">
        <h2>Log in</h2>
        <p>Name: </p>
        <input type="text" name="name">

        <p>Id: </p>
        <input type="number" name="id">

        <button type="submit" name="login" class="btn">Log In</button>
        <a href="home.php" type="submit" name="login" class="btn">Home Page</a>
    </form>
</body>

</html>