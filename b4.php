<?php

echo "Nhập giá trị của a: ";
$a = trim(fgets(STDIN));

echo "Nhập giá trị của b: ";
$b = trim(fgets(STDIN));

if ($a != 0) {
    $x = -$b / $a;
    echo "Nghiệm của phương trình $a*x + $b = 0 là x = $x";
} else {
    echo "Lỗi: a phải khác 0 để giải phương trình.";
}
echo "\n";
?>
