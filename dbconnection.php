<?php

// Database credentials
$servername = 'localhost'; 
$username = 'root'; 
$password = ''; 
$db_name = 'my_website_db'; 

// Create connection
$conn = new mysqli($servername,$username, $password, $db_name );

//check connection

if ($conn->connect_error) {
    die("connection failed: ". $conn->connect_error);
    

}

echo "connected successfully";

?>