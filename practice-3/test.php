<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, );

if($conn){
    echo "connection successfully";
}else{
    die("Connection failed" .mysqli_connect_errno());
}

$query = "DROP DATABASE newdbb";
$result = mysqli_query($conn, $query);

if($result){
    echo "DATABASE delete succesfully";
}else{
    die ("DATABASE creation failed" .$conn->error);
}
$conn->close();

?>