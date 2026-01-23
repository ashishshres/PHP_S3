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

// Student data
$name = "Bishal Baniya";
$semester = 6;
$symbol_number = "79242001";

// SQL query to insert data
$sql = "INSERT INTO students (name, semester, symbol_number)
        VALUES ('$name', $semester, '$symbol_number')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Student inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
