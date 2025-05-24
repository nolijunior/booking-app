<?php
$host = "mysql"; // if dockjer use "mysql" as host | if not docker use "localhost" as host
$user = "root";
$pass = "example";
$db = "roamhorizon";
$conn = new mysqli($host, $user, $pass, $db, 3306);
if ($conn->connect_error) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    echo '<script> alert("Failed to connect DB"); </script>';
    // Optionally, you can exit to stop further execution
    exit();
} else {
    // Connected successfully
    // echo "Connected to database!";
}
