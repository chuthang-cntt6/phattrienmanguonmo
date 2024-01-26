<?php

echo "Nhập nhiệt độ Fahrenheit: ";
$fahrenheit = trim(fgets(STDIN));

$celsius = (5 / 9) * ($fahrenheit - 32);

echo "Nhiệt độ Celsius tương đương là: $celsius";
echo "\n";
?>
