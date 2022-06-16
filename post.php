<?php

$FullName = $_POST['name'];
$RecordDate  = $_POST['date'];
$Email  = $_POST['email'];
$Phone  = $_POST['phone'];
$Service  = $_POST['service'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "client";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (FullName, RecordDate, Email, Phone, PetService)
VALUES ('$FullName', '$RecordDate', '$Email', '$Phone','$Service')";

if ($conn->query($sql) === TRUE) {
  sleep(3);
  header('Location: index.html#services');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>