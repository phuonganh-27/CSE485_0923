<?php
//connect database connection with PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;

?>