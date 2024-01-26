<?php

function collatzSequence($n)
{
    $sequence = array();

    $sequence[] = $n;

    while ($n != 1) {
        if ($n % 2 == 0) {
            $n = $n / 2;
        } else {
            $n = $n * 3 + 1;
        }

        $sequence[] = $n;
    }

    echo implode(' ', $sequence);
}

echo "Nhap so nguyen duong N: ";
$N = trim(fgets(STDIN));

collatzSequence($N);
echo "\n";
?>
