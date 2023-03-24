<?php

function circleDiameter($radius) : float
{
    return 2 * M_PI * $radius;
}

echo "Średnica koła o promieniu 5 wynosi: " . circleDiameter(5.0)."<br>";
