<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "db_basic_php";

$conn = new mysqli($servername, $username, $password, $dbname);

$conn -> set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{
  echo "Connnect Successfully!";
  }

  
