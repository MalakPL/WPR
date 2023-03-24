<?php

function rollDice($count) : array
{
    $rolls = [];

    for ($i = 0; $i < $count; $i++) {
        $rolls[] = rand(1, 6);
    }

    return $rolls;
}

echo "<pre>";
print_r(rollDice(7));
echo "</pre>";
