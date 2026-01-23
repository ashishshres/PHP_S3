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
    die("connection failed: " . mysqli_connect_error());
}

// open the csv file for reading
$file = fopen("users.csv", "r");

// check if the file was opened successfully
if ($file) {
    // skip the first row (header row) of the csv file
    fgetcsv($file, 1000, ",");

    // loop through each row of the csv file
    while ($data = fgetcsv($file, 1000, ",")) {
        // assign csv data to variables
        $name = $data[1];
        $email = $data[2];

        // sql query to insert csv data into the database table
        $sql = "INSERT INTO users (name, email) VALUES('$name', '$email')";

        // execute the sql query
        $result = mysqli_query($conn, $sql);
    }
} else {
    // display an error message if the file could not be opened
    echo "error opening file";
}

// close the database connection
mysqli_close($conn);
