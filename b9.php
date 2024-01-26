<?php

function findMissingNumber($N, $numbers)
{
    $expectedSum = ($N * ($N + 1)) / 2;

    $actualSum = array_sum($numbers);

    $missingNumber = $expectedSum - $actualSum;

    return $missingNumber;
}

echo "Nhap so nguyen N: ";
$N = trim(fgets(STDIN));

echo "Nhap " . ($N - 1) . " so khac biet: ";
$numbers = array_map('intval', explode(' ', trim(fgets(STDIN))));

$missingNumber = findMissingNumber($N, $numbers);
echo "So con thieu la: $missingNumber";
echo "\n";
?>
