<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>documents</title>
</head>

<body>

    <h3>Create a web page for basic voting machine. Create a form with three radio buttons representing three
        candidates. When the user selects a candidate and submits the form, use php to determine which
        candidate was selected and display a message indicating their vote choice. </h3>

    <h3>Solution: </h3>

    

    <form method="post">
        <label>
            <input type="radio" name="candidate" value="SOHEL" required>
            SOHEL
        </label>
        <br>
        <label>
            <input type="radio" name="candidate" value="FAHIM" required>
            FAHIM
        </label>
        <br>
        <label>
            <input type="radio" name="candidate" value="SABIT" required>
            SABIT
        </label>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['candidate'])) {
            $selectedCandidate = $_POST['candidate'];
            echo "<h2>Thank you for voting!</h2>";
            echo "<p>You voted for: <b>$selectedCandidate</b>.</p>";
        }
    }
    ?>
</body>

</html>