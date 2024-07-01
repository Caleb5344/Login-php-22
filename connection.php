<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "login-php-22";
$conn = new mysqli($servername, $username, $password, $db_name,3306);
if($conn->connect_error) {
   die("connection failed".$conn->connect_error);
}
echo"";