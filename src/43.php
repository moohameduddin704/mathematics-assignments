<?php
// Example PHP code for generating Fibonacci sequence
$sequence = array(0, 1);
for ($i = 2; $i < count($sequence) && $sequence[$i] <= 1000; $i++) {
    $nextValue = $sequence[$i-1] + $sequence[$i-2];
    if ($nextValue > 1000) break;
    array_push($sequence, $nextValue);
}
echo implode(", ", $sequence);
?>
