<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
}else{
    echo "connection successfully";
}

$query = "CREATE DATABASE testphp";

if($conn->query($query) === true){
    echo "Database created succesfully";
}else{
    die ("Database creation failed" .$conn->error);
}


$conn->close();

?>