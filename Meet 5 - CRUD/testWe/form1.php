<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Guessing game...</p>
    <form action="get.php" method="post">
        <p>
            <label for="guess">Input Guess</label>
            <input type="text" name="guess" id="guess">
        </p>
        <input type="submit" />
    </form>
    <hr>
    <pre>
    $_POST:
    <?php
    print_r($_POST);
    ?>
    $_GET:
    <?php
    print_r($_GET);
    ?>
    </pre>
</body>

</html>