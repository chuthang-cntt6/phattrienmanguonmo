<?php

echo "Nhập số nguyên dương a: ";
$a = trim(fgets(STDIN));

echo "Nhập số nguyên dương b: ";
$b = trim(fgets(STDIN));

if ($b != 0) {
    $remainder = $a % $b;
    echo "Kết quả chia lấy phần dư của $a cho $b là: $remainder";
} else {
    echo "Lỗi: b phải khác 0 để thực hiện phép chia.";

}
echo "\n";

?>
