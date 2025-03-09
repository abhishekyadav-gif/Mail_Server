<?php
$host = "localhost";
$username = "root";
$password = "";
// $dbname = "";

$conn = new Pdo("mysql:host=$host;dbname=mailsystem", $username, $password);
$conn->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);


// echo"databse connecd";

?>