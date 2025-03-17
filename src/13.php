<?php

// Function to generate a random number between 1 and 10
function getRandomNumber() {
    return rand(1, 10);
}

// Function to calculate the sum of two numbers
function sum($num1, $num2) {
    return $num1 + $num2;
}

// Function to calculate the product of two numbers
function multiply($num1, $num2) {
    return $num1 * $num2;
}

// Function to calculate the difference of two numbers
function subtract($num1, $num2) {
    return $num1 - $num2;
}

// Function to calculate the quotient of two numbers
function divide($num1, $num2) {
    return $num1 / $num2;
}

// Call the functions and print the results
echo "Random number: " . getRandomNumber() . "<br>";
echo "Sum: " . sum(5, 6) . "<br>";
echo "Product: " . multiply(5, 6) . "<br>";
echo "Difference: " . subtract(10, 4) . "<br>";
echo "Quotient: " . divide(10, 2) . "<br>";

?>