<?php
    $host = "localhost";
    $username = "your_username";
    $password = "your_password";
    $database = "your_database_name";

    // Create DB Connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>