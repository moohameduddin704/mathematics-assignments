<?php
// Problem 1: Addition and Subtraction Practice

echo "Problem 1\n";
$num1 = 5;
$num2 = 3;

$sum = $num1 + $num2;
$diff = $num1 - $num2;
echo "Sum of $num1 and $num2 is $sum\n";
echo "Difference between $num1 and $num2 is $diff\n";

// Problem 2: Multiplication, Division, and Modulo

echo "\nProblem 2\n";
$factor = 5;
$multiplication = $factor * 3;
$division = $factor / 2;
$modulo = $factor % 7;

echo "Multiplication of $factor by 3 is $multiplication\n";
echo "Division of $factor by 2 is $division\n";
echo "Modulo of $factor (remainder when divided by 7) is $modulo\n";

// Problem 3: Prime Numbers and Factorization

echo "\nProblem 3\n";
$number = 15;
$primeFactors = primeFactorization($number);

echo "Prime factors of $number are:\n";
foreach ($primeFactors as $factor => $exponent) {
    echo "$factor^{$exponent} ";
}
echo "\n";

function primeFactorization(int $num): array
{
    if ($num < 2) {
        return [];
    }

    $fac = [1];
    while (sqrt($num)) {
        for ($i = 0; $i < count($fac); $i++) {
            if ($num % $fac[$i] == 0) {
                break;
            }
        }
        if ($i == count($fac) - 1) {
            array_unshift($fac, $num);
        }
    }
    return $fac;
}
