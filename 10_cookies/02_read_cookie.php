<?php
// Check if the cookie "username" exists
if (isset($_COOKIE["username"])) {
    print "Welcome " . $_COOKIE["username"]; // Display cookie value
} else {
    print "Cookie not found";
}
