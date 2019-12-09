<?php
$servername = "localhost";
$username 	= "hireelec_myhireadmin";
$password 	= "C&VcX;]$-Kf_";
$dbname 	= "hireelec_myhire";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>