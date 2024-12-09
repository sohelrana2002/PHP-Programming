<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout  Page</title>

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<?php
session_start();
require "connection.php";

if(isset($_POST["logout"])){
    session_destroy();
    header('location:login.php');
}

?>
<body>
    
     <!-- ----navbar----  -->
     <?php require "navbar.html" ?>

     <!-- ----content ---  -->
      <div class="container">
        <div class="registration__container">
            <form class="form" method="POST">
                <h2 class="heading">Log Out</h2>

                <div class="form__box">
                    <p class="text">Are you sure want to Log out?</p>
                </div>

                <div class="logout__btn">
                    <a href="index.php" class="btn" >Cancle</a>
                    <button class="btn" name="logout">Log Out</button>
                </div>
            </form>
        </div>
      </div>
</body>
</html>