<?php 
require "connection.php";

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$sub_btn = $_POST["sub_btn"];

$query = "INSERT INTO formdata (name, email, password)
VALUES ('$name', '$email', '$password')";

if(isset($sub_btn)){
    if(mysqli_query($conn, $query)){
        echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
};

  mysqli_close($conn);

?>