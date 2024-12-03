<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>

    <link rel="stylesheet" href="style.css">
</head>


<!-- ---php code----  -->
<?php
require "connection.php";
$updateId = $_GET['id'];
$update_query = "SELECT * FROM registration WHERE id = '$updateId'";
$update_res = mysqli_query($conn, $update_query);

$update_row = mysqli_fetch_array($update_res);
echo $update_row['address'];

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


if(isset($_POST['update'])){

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
        $query = "UPDATE registration SET id = '$id', name = '$name', mobile = '$mobile',age = '$age', gender = '$gender', subject = '$subject',address = '$address' WHERE id = '$updateId' ";

        $res = mysqli_query($conn, $query);

        if($res){
            echo "Update successfully.";
        }else{
            echo "update is failed.";
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
                 value="<?php echo $update_row['id'] ? $update_row['id'] : "" ?>"
                >
                <?php echo isset($idError) ? $idError : ""; ?>
                
                <p>Name: </p>
                <input type="text" name="name"
                 value="<?php echo $update_row['name'] ? $update_row['name'] : "" ?>"
                >
                <?php echo isset($nameError) ? $nameError : ""; ?>
                
                <p>Mobile: </p>
                <input type="number" name="mobile"
                value="<?php echo $update_row['mobile'] ? $update_row['mobile'] : "" ?>" 
                >
                <?php echo isset($mobileError) ? $mobileError : ""; ?>
                
                <p>Age: </p>
                <input type="number" name="age"
                value="<?php echo $update_row['age'] ? $update_row['age'] : "" ?>"
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
                <textarea name="address"><?php echo $update_row['address'] ? $update_row['address'] : "" ?></textarea>
                <?php echo isset($addressError) ? $addressError : ""; ?>
                
                <button type="submit" name="update" class="btn">Update</button>
                <a href="login.php" class="btn">Log In</a>
            </div>
        </form>
    </div>

</body>

</html>