<?php
include 'env.php';

$conn = new mysqli($servername, $username, $password);

$conn -> select_db($database);
if ($conn -> connect_error) {
    die("Connection failed: " . $conn -> connect_error);
}

var_dump($_GET['id']);
$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id = $id";
$result = $conn -> query($sql);

if ($result) {
    echo "query executed successfully"."<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn -> error;
}

$conn -> close();
?>
