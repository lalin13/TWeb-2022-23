<?php 

$host = 'localhost';
$user = 'root';
// per mamp
$pass = 'root';
// per xampp
// $pass = '';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $pass, $db_name);

if($conn->connect_error){
	die('Error connecting to database: ' . $conn->connect_error);
}

