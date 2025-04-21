<?php
$host = 'your_mysql_host';
$user = 'your_db_user';
$pass = 'your_password';
$dbname = 'your_database';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$student_id = $_POST['student_id'];

$sql = "INSERT INTO students (name, student_id) VALUES ('$name', '$student_id')";
if ($conn->query($sql) === TRUE) {
  echo "Registration successful!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
