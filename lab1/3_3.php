<?php

function multiplicationTable($size) {
    for ($y = 1; $y <= $size; $y++) {
        for ($x = 1; $x <= $size; $x++) {
            echo sprintf("%4d", $x * $y);
        }
        echo "\n";
    }
}

echo "<pre>";
multiplicationTable(10);
echo "</pre>";
