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
$updatePhone = $_GET['specificPhone'];
$getPhoneFromSession = $_SESSION['phone'];
$update_query = "SELECT * FROM addcontact WHERE phone = '$updatePhone'";
$update_res = mysqli_query($conn, $update_query);
$update_row = mysqli_fetch_array($update_res);

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


    $updateMessage = "";
    // ----check if there is no error in input --
    if (!$nameError && !$phoneError && !$emailError && !$dateError && !$addressError && !$professionError) {
        $query = "UPDATE addcontact SET name = '$name', phone = '$phone', email = '$email', date = '$date', profession = '$profession', address = '$address' WHERE phone = '$updatePhone'";

        $res = mysqli_query($conn, $query);

        if ($res) {
            $updateMessage = "Update successfully!";
        } else {
            $updateMessage = "Update failed!";
        }
    }

}

?>


<body>

    <!-- ----navbar----  -->
    <?php require "navbar.html" ?>

    <!-- ----content---  -->
    <div class="container">
        <div class="registration__container">
            <form method="POST" class="form">
                <h2 class="heading">Add New Contact</h2>

                <div class="form__box">
                    <!-- ---name---  -->
                    <input type="text" placeholder="Enter Name" name="name"
                        value="<?php echo $update_row['name'] ? $update_row['name'] : "" ?>">

                    <!-- ---name error--- -->
                    <p class="text"><?php echo isset($nameError) ? $nameError : "" ?></p>

                    <!-- ---phone ---  -->
                    <input type="number" placeholder="Enter Phone Number" name="phone"
                        value="<?php echo $update_row['phone'] ? $update_row['phone'] : "" ?>">

                    <!-- ---phone error---  -->
                    <p class="text"><?php echo isset($phoneError) ? $phoneError : "" ?></p>


                    <!----email ---  -->
                    <input type="email" placeholder="Enter Your Email" name="email"
                        value="<?php echo $update_row['email'] ? $update_row['email'] : "" ?>">
                    <!-- ----email errror  ---  -->
                    <p class="text"><?php echo isset($emailError) ? $emailError : "" ?></p>

                    <!----date ---  -->
                    <input type="date" placeholder="Bithday" name="date"
                        value="<?php echo $update_row['date'] ? $update_row['date'] : "" ?>">

                    <!-- ----date errror  ---  -->
                    <p class="text"><?php echo isset($dateError) ? $dateError : "" ?></p>

                    <!----profession ---  -->
                    <input type="text" placeholder="Enter profession" name="profession"
                        value="<?php echo $update_row['profession'] ? $update_row['profession'] : "" ?>">

                    <!-- ----profession errror  ---  -->
                    <p class="text"><?php echo isset($professionError) ? $professionError : "" ?></p>

                    <!-- ---address --  -->
                    <input type="text" placeholder="Enter address" name="address"
                        value="<?php echo $update_row['address'] ? $update_row['address'] : "" ?>">

                    <!-- ----address errror  ---  -->
                    <p class="text"><?php echo isset($addressError) ? $addressError : "" ?></p>
                </div>

                 <!-- ----update Message  ---  -->
                 <p class="text"><?php echo isset($updateMessage) ? $updateMessage : "" ?></p>
                <button type="submit" name="addcontact" class="btn">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>