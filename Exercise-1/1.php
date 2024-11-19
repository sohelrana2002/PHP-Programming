<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .success {
            color: green;
        }

        .failed {
            color: red;
        }
    </style>
</head>

<body>
    <h3>Create a simple web page that allows the user to guess a number between 1 and 10. PHP script will
        randomly selects the number. Include a form with an input field for the user to enter their guess. When
        the user submits the form, use php to check if the guessed number matches a predefined number. If the
        guess is correct then display a success message in green text. If the guess is incorrect then display a failure
        message in red text. </h3>

    <h3>Solution: </h3>

    <form method="post">
        <p>Guess a number between 1 and 10</p>
        <input type="number" name="guass_num">

        <button type="submit" name="submit">Submit</button>
    </form>


    <?php

    if (isset($_POST['submit'])) {
        $guassNum = isset($_POST['guass_num']) ? $_POST['guass_num'] : "";
        $randomNum = random_int(1, 10);

        echo "Random value: " . $randomNum;

        if ($guassNum == $randomNum) {
            echo "<p class='success'>Message: success!</p>";
        } else {
            echo "<p class='failed'>Message: failed!</p>";
        }
    }

    ?>

</body>

</html>