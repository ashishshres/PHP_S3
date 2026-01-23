<?php
// define database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "csv";

// establish connection to the mysql database
$conn = mysqli_connect($servername, $username, $password, $database);

// check if the connection was successful
if (!$conn) {
    die("connection failed:" . mysqli_connect_error());
}

// check if the request method is post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get the name and email from the post request
    $name = $_POST["name"];
    $email = $_POST["email"];

    // sql query to insert data into the users table
    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    $result = mysqli_query($conn, $sql);

    // if the insert was successful
    if ($result) {
        // sql query to select all data from the users table
        $sql = "SELECT * FROM users";
        $data = mysqli_query($conn, $sql);

        // check if there are any records in the users table
        if (mysqli_num_rows($data) > 0) {
            // open csv file for writing
            $file = fopen("users.csv", "w");

            // write header row to the csv file
            fputcsv($file, array("ID", "Name", "Email"));

            // write each row of data to the csv file
            while ($row = mysqli_fetch_assoc($data)) {
                fputcsv($file, $row);
            }

            // close the csv file
            fclose($file);
        } else {
            // display message if no records are found
            echo "no records found!";
        }
    }
}

// close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>

<body>
    <form method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name"><br>
        <label for="email">email</label>
        <input type="email" name="email" id="email"><br>
        <button type="submit">submit</button>
    </form>
</body>

</html>