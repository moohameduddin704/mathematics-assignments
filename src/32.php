<?php
// Define variables
$firstName = "John";
$lastName = "Doe";

// Check if user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = "Guest";
}

// Display username on the page
echo "Hello, " . htmlspecialchars($username) . "!";

// Add some code here...

?>
