<?php
// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$database = "collegeDB";

// Connect to database
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// SQL query to fetch students
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Display records
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Semester: " . $row['semester'] . "<br>";
        echo "Symbol No: " . $row['symbol_number'] . "<br><br>";
    }
} else {
    echo "No records found";
}

// Close connection
mysqli_close($conn);
