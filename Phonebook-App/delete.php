<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<!-- ---php code----  -->
<?php
session_start();
require "connection.php";
$deleteId = $_GET['specificPhone'];

$query = "DELETE FROM addcontact WHERE phone = '$deleteId'";

$res = mysqli_query($conn, $query);

$deleteMessage = "";
if($res){
    $deleteMessage = "Contact Deleted successfully";
}else{
    $deleteMessage = "Deleted issue";
}


?>
<body>
    <!-- ---- navbar -->
    <?php require "navbar.html" ?>

    <div class="container">
        <div class="delete__container">
            <p class="heading"><?php echo "$deleteMessage" ?></p>
        </div>
    </div>
</body>
</html>