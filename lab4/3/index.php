<?php

if (isset($_COOKIE['licznik'])) {
    $licznik = $_COOKIE['licznik'];
} else {
    $licznik = 0;
}


if (!isset($_COOKIE['odswiezona'])) {
    $licznik++;
    setcookie('odswiezona', true, time() + 3600);
}

setcookie('licznik', $licznik, time() + 3600);

echo "Liczba odwiedzin: $licznik";


