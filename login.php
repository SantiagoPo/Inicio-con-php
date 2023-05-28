<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "front_back_iii";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get email and password from form
$email = $_POST['email'];
$password = $_POST['password'];

// Query database for user with email and password
$sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

// Check if user exists
if (mysqli_num_rows($result) > 0) {
  // Redirect to menu.html
  header("Location: menu.html");
} else {
  // Show error message
  echo "Error: Usuario o contraseña incorrectos";
}

mysqli_close($conn);
?>