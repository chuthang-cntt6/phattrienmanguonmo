<?php

echo "Nhập thời gian tính bằng giây: ";
$totalSeconds = trim(fgets(STDIN));

$hours = floor($totalSeconds / 3600);
$minutes = floor(($totalSeconds % 3600) / 60);
$seconds = $totalSeconds % 60;

echo "Thời gian là: $hours giờ, $minutes phút, $seconds giây";
echo "\n";
?>
