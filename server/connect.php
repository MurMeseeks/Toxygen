<?php

$servername = "remotemysql.com";
$username = "z2Ymbo1JnT";
$password = "82AYPZnSCe";

// Create connection
$conn= mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
