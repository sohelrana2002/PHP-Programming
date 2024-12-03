<?php
session_start();
require "connection.php";
$deleteId = $_GET['id'];

$query = "DELETE FROM registration WHERE id = '$deleteId'";

$res = mysqli_query($conn, $query);

if($res){
    echo "Deleted successfully";
}else{
    "Deleted issue";
}


?>