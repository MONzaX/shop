<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "shop";

// Create connection
$conn = new mysqli($host, $user, $pw, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>