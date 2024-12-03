<?php
require "connection.php";

$id = "";
$name = "";
$mobile = "";
$age = "";
$gender = "";
$subject = "";
$address = "";

$idError = "";
$nameError = "";
$mobileError = "";
$ageError = "";
$genderError = "";
$subjectError = "";
$addressError = "";


if(isset($_POST['registration'])){
    if($_POST['id'] == ""){
        $idError = "ID is required.";
    }else{
        $id = $_POST['id'];
    }
    
    if($_POST['name'] == ""){
        $nameError = "Name is required.";
    }else{
        $name = $_POST['name'];
    }
    
    if($_POST['mobile'] == ""){
        $mobileError = "Mobile number is required.";
    }else if(strlen($_POST['mobile']) != 11){
        $mobileError = "Mobile number must be 11 digit.";
    }else{
        $mobile = $_POST['mobile'];
    }
    

    if($_POST['age'] == ""){
        $ageError = "Age is required.";
    }else if(strlen($_POST['age']) < 0){
        $ageError = "Age is must be positive value.";
    }else{
        $age = $_POST['age'];
    }
    
    if($_POST['gender'] == ""){
        $genderError = "Gender is required.";
    }else{
        $gender = $_POST['gender'];
    }
    
    if($_POST['subject'] == ""){
        $subjectError = "Subject is required.";
    }else{
        $subject = $_POST['subject'];
    }
    
    if($_POST['address'] == ""){
        $addressError = "Address is required.";
    }else{
        $address = $_POST['address'];
    }


}

?>