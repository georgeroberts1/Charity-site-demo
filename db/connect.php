<?php
    $servername = "localhost";
    $username = "root";
//    $password = "INSERT_PASSWORD";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo("<script>console.log('Failed to connect');</script>");
    } 
    echo "Connected successfully";

    echo("<script>console.log('PHP: ".$data."');</script>");
?>