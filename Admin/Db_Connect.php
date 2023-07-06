<?php
$host = "localhost";  // Replace with your host if necessary
$user_db = "root";  // Replace with your database username
$con_password = "";  // Replace with your database password if necessary
$database = "tilesmanagementsystem";  // Replace with your database name
date_default_timezone_set('Asia/Kolkata');  // Set the timezone to Asia/Kolkata

$conn = mysqli_connect($host, $user_db, $con_password, $database);  // Establish the database connection

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());  // Check the connection for errors
}
?>
