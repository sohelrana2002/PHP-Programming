<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniProject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    // echo "Connection successfully";
}else{
    die("Connection failed." .mysqli_connect_errno());
}

?>