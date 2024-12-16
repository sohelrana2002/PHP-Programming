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

$query = "INSERT INTO student(id, sname, phone)
    VALUES('222311057', 'SOHEL RANA', '01751070854')";

if($conn->query($query) === true){
    echo "Data insert succesfully";
}else{
    die ("Data insert failed" .$conn->error);
}

$conn->close();
?>