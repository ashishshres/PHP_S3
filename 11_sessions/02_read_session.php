<?php
// Start the session
session_start();

// Check if session variable "username" exists
if (isset($_SESSION["username"])) {
    print "Welcome " . $_SESSION["username"]; // Display session value
} else {
    print "Session not found";
}
