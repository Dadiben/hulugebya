<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the submitted username and password
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  // Perform login validation
  if ($username === "admin" && $password === "password") {
    // Redirect to order page or perform any other action
    header("Location: order.php");
    exit();
  } else {
    $error = "Invalid username or password. Please try again.";
  }
}
?>
