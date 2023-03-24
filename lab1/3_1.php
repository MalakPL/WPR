<?php
$numbers = [2, 3, 5, 7, 11, 13, 17]; // 2^2 + 3^2 + 5^2 + 7^2 + 11^2 + 13^2 + 17^2 =


$max = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}
echo "Maksymalna wartość FOR: $max<br>";



$max = $numbers[0];
$i = 1;
while ($i < count($numbers)) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
    $i++;
}
echo "Maksymalna wartość WHILE: $max<br>";



$max = $numbers[0];
$i = 1;
do {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
    $i++;
} while ($i < count($numbers));
echo "Maksymalna wartość DO WHILE: $max<br>";




$max = $numbers[0];
foreach ($numbers as $number) {
    if ($number > $max) {
        $max = $number;
    }
}
echo "Maksymalna wartość FOREACH: $max<br>";
