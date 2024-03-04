<?php
include 'env.php';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE $database";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully"."<br>";
} else {
  echo "Error creating database: " . $conn->error."<br>";
}

$conn->select_db("shop");

$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
level VARCHAR(10) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
  echo "Table user created successfully"."<br>";
} else {
  echo "Error creating table: " . $conn->error."<br>";
}


$sql = "INSERT INTO user (username, password, level) VALUES
('admin', '1234', 'admin'),
('user1', 'abcd', 'user')";
if ($conn->query($sql) === TRUE) {
  echo "Two users inserted successfully"."<br>";
} else {
  echo "Error inserting users: " . $conn->error."<br>";
}

$conn->close();
?>
