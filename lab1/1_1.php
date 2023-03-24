<?php

function rollDice() : int
{
    return rand(1, 6);
}

echo "Wynik rzutu kostką: " . rollDice()."<br>";
