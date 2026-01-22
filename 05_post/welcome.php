<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/global.css">
</head>

<body>
    <!-- Receive the form details using `POST` and display the fullname and email -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
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