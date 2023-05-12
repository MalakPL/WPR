<?php
if (isset($_COOKIE['licznik'])) {
    $licznik = $_COOKIE['licznik'];
} else {
    $licznik = 0;
}

$licznik++;

setcookie('licznik', $licznik, time() + 3600);

$wartoscGraniczna = 10;
if ($licznik >= $wartoscGraniczna) {
    echo "Gratulacje! Osiągnąłeś wartość graniczną odwiedzin: $licznik";
} else {
    echo "Liczba odwiedzin: $licznik";
}
