<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <style>
        table{
            width: 1000px;
            margin: 0 auto;
            padding-top: 10%;
        }
        tr, td{
            padding: 5px 10px;
            text-align: center;
        }
    </style>
</head>

<?php
session_start();
require "connection.php";

$query = "SELECT * FROM registration";
$res = mysqli_query($conn, $query);

?>
<body>
    <h1>Registration Info</h1>
    <table border="1" style=" border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Subject</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
            while($row = mysqli_fetch_array($res)){
                $Id = $row['id'];
                echo "<tr>";
                    echo "<td>" .$row['id'] ."</td>";
                    echo "<td>" .$row['name'] ."</td>";
                    echo "<td>" .$row['mobile'] ."</td>";
                    echo "<td>" .$row['age'] ."</td>";
                    echo "<td>" .$row['gender'] ."</td>";
                    echo "<td>" .$row['subject'] ."</td>";
                    echo "<td>" .$row['address'] ."</td>";
                    echo "<td> <a href='update.php?id=$Id'>Update</a> </td>";
                    echo "<td> <a href='delete.php?id=$Id'>Delete</a> </td>";
                echo "</tr>";
            }


        ?>
    </table>
</body>
</html>