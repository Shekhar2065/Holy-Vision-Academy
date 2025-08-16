<?php
$servername = "localhost";
$username = "root";   // default XAMPP username
$password = "";       // default XAMPP password is empty
$dbname = "testdb";   // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert into database
$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>✅ Thank you, your message has been sent!</h2>";
  echo "<a href='contact.html'>Go Back</a>";
} else {
  echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
