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

// Data to be updated
$id = 1;
$name = "Prasamsha Adhikari";
$symbol_number = "79242009";

// SQL query to update record
$sql = "UPDATE students
        SET 
        name='$name',
        symbol_number='$symbol_number'
        WHERE id=$id";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Student updated successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
