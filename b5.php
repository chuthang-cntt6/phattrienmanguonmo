<?php

echo "Nhập số nguyên a: ";
$a = trim(fgets(STDIN));

echo "Nhập số nguyên b: ";
$b = trim(fgets(STDIN));

echo "Nhập số nguyên c: ";
$c = trim(fgets(STDIN));

$maxValue = max($a, $b, $c);
echo "Giá trị lớn nhất là: $maxValue";
echo "\n";
?>
