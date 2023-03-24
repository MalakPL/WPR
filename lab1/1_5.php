<?php


function poleTrojkata() {
    $a = readline("Podaj długość podstawy: ");
    $h = readline("Podaj wysokość: ");
    $pole = 0.5 * $a * $h;
    echo "Pole trójkąta wynosi: " . $pole . "\n";
}

function poleProstokata() {
    $a = readline("Podaj długość pierwszego boku: ");
    $b = readline("Podaj długość drugiego boku: ");
    $pole = $a * $b;
    echo "Pole prostokąta wynosi: " . $pole . "\n";
}

function poleTrapezu() {
    $a = readline("Podaj długość pierwszej podstawy: ");
    $b = readline("Podaj długość drugiej podstawy: ");
    $h = readline("Podaj wysokość: ");
    $pole = 0.5 * ($a + $b) * $h;
    echo "Pole trapezu wynosi: " . $pole . "\n";
}

echo "Wybierz figurę, dla której chcesz obliczyć pole:\n";
echo "1 - Trójkąt\n";
echo "2 - Prostokąt\n";
echo "3 - Trapez\n";

$figura = readline("Wybierz: ");

switch($figura) {
    case 1:
        poleTrojkata();
        break;
    case 2:
        poleProstokata();
        break;
    case 3:
        poleTrapezu();
        break;
    default:
        echo "Nieprawidłowy wybór\n";
}

