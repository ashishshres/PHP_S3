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

// ID of record to delete
$id = 1;

// SQL query to delete record
$sql = "DELETE FROM students WHERE id=$id";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Student deleted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
