<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <h1>Input Validation Form</h1>

    <?php
    $name = "";
    $email = "";
    $age = "";
    
    $nameErr = "";
    $emailErr = "";
    $ageErr = "";
    $successMessage = "";

    if (isset($_POST["submit"])) {
        // --------- Name---------
        if ($_POST["name"] == "") {
            $nameErr = "Name is required.";
        } else {
            $name = $_POST["name"];
        }

        //  ------Email------
        if ($_POST["email"] == "") {
            $emailErr = "Email is required.";
        } elseif (!strpos($_POST["email"], '@') ) {
            $emailErr = "Invalid email format.";
        } else {
            $email = $_POST["email"];
        }

        // ---Age---
        if ($_POST["age"] == "") {
            $ageErr = "Age is required.";
        } elseif ($_POST["age"] < 18 || $_POST["age"] > 30) {
            $ageErr = "Age must be a number between 18 and 30";
        } else {
            $age = $_POST["age"];
        }

        
        if ($nameErr == "" && $emailErr == "" && $ageErr == "") {
            $successMessage = "Submitted successfully!";
        }
    }
    ?>

    <form method="post">
        <p>Name: </p>
        <input type="text" name="name" value="<?php echo $name ?>">
        <span style="color:red;"><?php echo $nameErr; ?></span>

        <p>Email: </p>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color:red;"><?php echo $emailErr; ?></span>

        <p>Age:</p>
        <input type="number" name="age" value="<?php echo $age; ?>">
        <span style="color:red;"><?php echo $ageErr; ?></span>

        <p>
            <button type="submit" name="submit">Submit</button>
        </p>
    </form>

    <?php
    if ($successMessage != "") {
        echo "<h2 style='color:green;'>$successMessage</h2>";
    }
    ?>
</body>

</html>