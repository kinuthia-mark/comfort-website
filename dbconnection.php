<?php

// Database credentials
$dbHost = 'localhost'; 
$dbUsername = 'root'; 
$dbPassword = ''; 
$dbName = 'my_website_db'; 

// Create connection
$connection = mysqli_connect("localhost:3306", "root", "", "my_website_db");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo 'Connected successfully';
}

// Close the connection (optional)
mysqli_close($connection);
?>
