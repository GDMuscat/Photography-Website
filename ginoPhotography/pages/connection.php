<?php

// start the session
session_start(); 

// The connection of the database
$conn = mysqli_connect("localhost", "root", "", "photography_db", 3307);

// If connection could not be made...
if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database. Please try again later";
    exit;
}

?>