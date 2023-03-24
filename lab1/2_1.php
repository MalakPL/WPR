<?php

function randNumberFromArray($idx) : int {
    $nTab = [];
    for ($i = 0; $i <= $idx; $i++) {
        $nTab[] = rand(0, $idx * $idx);
    }
    return $nTab[$idx];
}

print(randNumberFromArray(7));
