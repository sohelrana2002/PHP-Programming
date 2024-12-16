<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testphp";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    } else {
        echo "connection successfully";
    }

    $query = "SELECT * FROM student";
    $result = $conn->query($query);

    ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr?>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['sname'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "</tr>";
        }
        ;
        ?>
    </table>
</body>

</html>