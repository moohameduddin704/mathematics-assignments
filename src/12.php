
<?php

function getRandomNumber($min, $max) {
    return mt_rand($min, $max);
}

function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function getPrimeNumber($min, $max) {
    while (true) {
        $randomNumber = getRandomNumber($min, $max);
        if (isPrime($randomNumber)) {
            return $randomNumber;
        }
    }
}

?>