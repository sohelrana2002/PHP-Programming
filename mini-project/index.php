<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>

    <link rel="stylesheet" href="style.css">
</head>


<!-- ---php code----  -->
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

    // ----validation----
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
    }else if($_POST['age'] < 0){
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

    // ---insert query---
    if(!$idError && !$nameError && !$ageError && !$genderError && !$subjectError && !$addressError){
        $query = "INSERT INTO registration(id, name, mobile, age, gender, subject, address) VALUES('$id', '$name', '$mobile', '$age', '$gender', '$subject', '$address')";

        $res = mysqli_query($conn, $query);

        if($res){
            echo "New record is insert.";
        }else{
            echo "insert is failed.";
        }
    }


}

?>


<!-- -----body start-----  -->
<body>
    <div class="container">

        <form  class="registration__form" method="POST">
            <h1>Registration</h1>

            <div class="registration__container">
                <p>ID: </p>
                <input type="number" name="id"
                 value="<?php echo isset($id) ? $id : "" ?>"
                >
                <?php echo isset($idError) ? $idError : ""; ?>
                
                <p>Name: </p>
                <input type="text" name="name"
                 value="<?php echo isset($name) ? $name : "" ?>"
                >
                <?php echo isset($nameError) ? $nameError : ""; ?>
                
                <p>Mobile: </p>
                <input type="number" name="mobile"
                value="<?php echo isset($mobile) ? $mobile : "" ?>" 
                >
                <?php echo isset($mobileError) ? $mobileError : ""; ?>
                
                <p>Age: </p>
                <input type="number" name="age"
                value="<?php echo isset($age) ? $age : "" ?>"
                >
                <?php echo isset($ageError) ? $ageError : ""; ?>
                
                <p>Gender</p>
                <select name="gender">
                    <option value="not select" >Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <?php echo isset($genderError) ? $genderError : ""; ?>
                
                <p>Subject: </p>
                <select name="subject">
                    <option value="<?php echo isset($subject) ? $subject : "" ?>">Select</option>
                    <option value="cse">CSE</option>
                    <option value="eee">EEE</option>
                    <option value="ba">BA</option>
                </select>
                <?php echo isset($subjectError) ? $subjectError : ""; ?>
                
                <p>Address: </p>
                <textarea name="address" value="<?php echo isset($address) ? $address : "" ?>"></textarea>
                <?php echo isset($addressError) ? $addressError : ""; ?>
                
                <button type="submit" name="registration" class="btn">Registration</button>
                <a href="login.php" class="btn">Log In</a>
            </div>
        </form>
    </div>

</body>

</html>