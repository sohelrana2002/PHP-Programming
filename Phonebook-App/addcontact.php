<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact Page</title>

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>


<!-- -----php cod----  -->
<?php
session_start();
require "connection.php";
$getPhoneFromSession = isset($_SESSION['phone']) ? $_SESSION['phone']: "";

// echo "$getPhoneFromSession";


$name = "";
$phone = "";
$email = "";
$date = "";
$profession = "";
$address = "";
$refPhone = $getPhoneFromSession;

$nameError = "";
$phoneError = "";
$emailError = "";
$dateError = "";
$professionError = "";
$addressError = "";

if (isset($_POST["addcontact"])) {
    // --name---
    if ($_POST["name"] == "") {
        $nameError = "Name is required.";
    } else {
        $name = $_POST["name"];
    }

    // ---phone---
    if ($_POST["phone"] == "") {
        $phoneError = "Phone is required.";
    } else if (strlen($_POST["phone"]) != 11) {
        $phoneError = "Phone number must be 11 digit";
    } else {
        $phone = $_POST["phone"];
    }

    // ---email---
    if ($_POST["email"] == "") {
        $emailError = "Email is required.";
    } else if (!strpos($_POST["email"], '@')) {
        $emailError = "Email Validation failed";
    } else {
        $email = $_POST["email"];
    }

    // ---date----
    if ($_POST["date"] == "") {
        $dateError = "Date of birth is required.";
    } else {
        $date = $_POST["date"];
    }

    // ---address----
    if ($_POST["address"] == "") {
        $addressError = "Address is required.";
    } else {
        $address = $_POST["address"];
    }

    // ---profession----
    if ($_POST["profession"] == "") {
        $professionError = "Profession is required.";
    } else {
        $profession = $_POST["profession"];
    }

    // ---address----
    if ($_POST["address"] == "") {
        $addressError = "Address is required.";
    } else {
        $address = $_POST["address"];
    }


    $registerMessage = "";
    // ----check if there is no error in input --
    if (!$nameError && !$phoneError && !$emailError && !$dateError && !$addressError && !$professionError) {
        $query = "INSERT INTO addcontact(name, phone, email, date, profession, address, refphone) VALUES ('$name', '$phone', '$email', '$date', '$profession', '$address', '$refPhone')";

        $res = mysqli_query($conn, $query);

        if ($res) {
            $registerMessage = "Registration successfully!";
        } else {
           $registerMessage = "Registration failed!";
        }
    }

}


?>


<body>

    <!-- ----navbar----  -->
    <?php require "navbar.html" ?>

    <?php if($getPhoneFromSession == ""){?>
        <div class="container">
            <div class="check__login">
                <h2 class="heading">At first Login your account then add contact</h2>
            </div>
        </div>
    <?php }else{ ?>

    <!-- ---content ---  -->
    <div class="container">
        <div class="registration__container">
            <form method="POST" class="form">
                <h2 class="heading">Add New Contact</h2>

                <div class="form__box">
                    <!-- ---name---  -->
                    <input type="text" placeholder="Enter Name" name="name"
                        value="<?php echo isset($name) ? $name : "" ?>">

                    <!-- ---name error--- -->
                    <p class="text"><?php echo isset($nameError) ? $nameError : "" ?></p>

                    <!-- ---phone ---  -->
                    <input type="number" placeholder="Enter Phone Number" name="phone"
                        value="<?php echo isset($phone) ? $phone : "" ?>">

                    <!-- ---phone error---  -->
                    <p class="text"><?php echo isset($phoneError) ? $phoneError : "" ?></p>


                    <!----email ---  -->
                    <input type="email" placeholder="Enter Your Email" name="email"
                        value="<?php echo isset($email) ? $email : "" ?>">
                    <!-- ----email errror  ---  -->
                    <p class="text"><?php echo isset($emailError) ? $emailError : "" ?></p>

                    <!----date ---  -->
                    <input type="date" placeholder="Bithday" name="date"
                        value="<?php echo isset($date) ? $date : "" ?>">

                    <!-- ----date errror  ---  -->
                    <p class="text"><?php echo isset($dateError) ? $dateError : "" ?></p>

                    <!----profession ---  -->
                    <input type="text" placeholder="Enter profession" name="profession"
                        value="<?php echo isset($profession) ? $profession : "" ?>">

                    <!-- ----profession errror  ---  -->
                    <p class="text"><?php echo isset($professionError) ? $professionError : "" ?></p>

                    <!-- ---address --  -->
                    <input type="text" placeholder="Enter address" name="address"
                        value="<?php echo isset($address) ? $address : "" ?>">

                    <!-- ----address errror  ---  -->
                    <p class="text"><?php echo isset($addressError) ? $addressError : "" ?></p>

                </div>
                 <!-- ----update Message  ---  -->
                 <p class="text"><?php echo isset($registerMessage) ? $registerMessage : "" ?></p>

                <button type="submit" name="addcontact" class="btn">Submit</button>
            </form>
        </div>
    </div>
    <?php } ?>
</body>

</html>