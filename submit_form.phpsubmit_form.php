<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Process the data (e.g., save to database, send email, etc.)
// For demonstration purposes, we'll just print the data
echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Message: $message<br>";

// Redirect the user to a relevant page
// For example, redirect to a thank you page
header("Location: index.html");
exit();
?>
