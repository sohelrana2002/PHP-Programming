<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<?php
session_start();
require "connection.php";
$getPhoneFromSession = isset($_SESSION['phone']) ? $_SESSION['phone'] : "";

$query = "SELECT * FROM addcontact WHERE refphone = '$getPhoneFromSession'";
$res = mysqli_query($conn, $query);

?>

<body>
    <!-- ---navbar --  -->
    <?php require "navbar.html" ?>

    <!-- ----content ---  -->
    <?php if ($getPhoneFromSession == "") { ?>
        <div class="container">
            <div class="check__login">
                <h2 class="heading">At first Login your account</h2>
            </div>
        </div>
    <?php } else { ?>
        <div class="container">
            <div class="table__container">
                <h2 class="heading">Your Contact Info</h2>
                <table class="contact__info">
                    <tr>
                        <th>Full Name</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Date of birth</th>
                        <th>Pofession</th>
                        <th>Address</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_array($res)) {
                        $specificPhone = $row['phone'];
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td class='email'>" . $row['email'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['profession'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td> <a href='update.php?specificPhone=$specificPhone'>Update</a> </td>";
                        echo "<td> <a href='delete.php?specificPhone=$specificPhone'>Delete</a> </td>";
                        echo "</tr>";
                    }


                    ?>
                </table>
            </div>

        </div>
    <?php } ?>


</body>

</html>