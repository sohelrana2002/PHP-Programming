<?php
$bgColor = "white";

if (isset($_POST['color'])) {
    $bgColor = $_POST['color'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
            text-align: center;
            padding: 20px;
        }

        .red {
            background-color: red;
            color: white;
        }

        .green {
            background-color: green;
            color: white;
        }

        .blue {
            background-color: blue;
            color: white;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: 3px solid gray;
        }
    </style>
</head>

<body>
    <h1>Choose a Background Color</h1>
    <form method="post">
        <button type="submit" name="color" value="red" class="red">Red</button>
        <button type="submit" name="color" value="green" class="green">Green</button>
        <button type="submit" name="color" value="blue" class="blue">Blue</button>
    </form>
</body>

</html>