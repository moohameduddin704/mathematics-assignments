<?php
function sumOfSquares($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number * $number;
    }
    return $sum;
}

$numbers = [1, 2, 3, 4];
$result = sumOfSquares($numbers);
echo "The sum of squares is: " . $result;
?>
