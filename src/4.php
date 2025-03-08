<?php
// Get the number of assignments from the user
$numAssignments = readline("Enter the number of mathematics assignments: ");

// Generate a random assignment for each day
for ($i = 1; $i <= $numAssignments; $i++) {
    // Calculate the date for the assignment
    $date = date("Y-m-d", mt_rand(strtotime("today"), strtotime("+30 days")));

    // Generate a random name for the assignment
    $name = "Mathematics Assignment " . $i;

    // Print the assignment details
    echo "$date: $name" . PHP_EOL;
}
?>