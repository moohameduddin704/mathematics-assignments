<?php
// Define variables and constants from the question
$studentName = "Alice";
$password = "password123";

// Check if student credentials are correct
if (strcmp($studentName, "Alice") === 0 && $password == "password123") {
    echo "Login successful.";
} else {
    echo "Incorrect username or password. Please try again.";
}
?>
