<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obcsdb";

// Create connection
$dbh = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$dbh) {
    die("Connection failed: " . mysqli_connect_error());
}
?>