<?php
$servername ="localhost";
$username = "nitish23000";
$password ="PXSHAyOl";
$dbname = "wp_nitish23000";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
?>