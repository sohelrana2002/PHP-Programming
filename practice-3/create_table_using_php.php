<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testphp";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
}else{
    echo "connection successfully";
}

$query = "CREATE TABLE student(
    id INT PRIMARY KEY, 
    sname VARCHAR(50), 
    phone VARCHAR(50)
)";

if($conn->query($query) === true){
    echo "Table creation succesfully";
}else{
    die ("Table creation failed" .$conn->error);
}
$conn->close();

?>