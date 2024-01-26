<?php

echo "Nhập số nguyên dương N có 2 chữ số: ";
$number = trim(fgets(STDIN));

if ($number >= 10 && $number <= 99) {
    $digitSum = floor($number / 10) + $number % 10;
    echo "Tổng các chữ số của $number là: $digitSum";
} else {
    echo "Lỗi: N phải là số nguyên dương có 2 chữ số.";
}
echo "\n";
?>
