<?php

$filename = 'licznik.txt';
$visits = 1;

if (!file_exists($filename))
{
    file_put_contents($filename, $visits);
}
else
{
    $visits = file_get_contents($filename);
    $visits++;
    file_put_contents($filename, $visits);
}

echo "Liczba odwiedzin witryny: " . $visits;
