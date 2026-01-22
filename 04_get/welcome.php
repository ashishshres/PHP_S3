<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Receive the form details using `GET` and display the fullname and email -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $fullname = $_GET["fullname"];
        $email = $_GET["email"];
    }
    ?>
    <h1>
        <?=
        "Hello, $fullname 👋"
        ?>
    </h1>
    <p>
        <?= "Your email is $email" ?>
    </p>
</body>

</html>