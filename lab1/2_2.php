<?php


function getCountry($kraj){

    $kraj = trim(strtolower($kraj));

    $narodowosci = array(
        "polska" => "Polak",
        "niemcy" => "Niemiec",
        "francja" => "Francuz",
        "włochy" => "Włoch",
        "hiszpania" => "Hiszpan",
        "rosja" => "Rosjanin",
        "usa" => "Amerykanin",
        "kanada" => "Kanadyjczyk"
    );

    // sprawdzenie, czy kraj znajduje się w tablicy narodowości
    if(array_key_exists($kraj, $narodowosci)) {
        echo "Twoja narodowość to: " . $narodowosci[$kraj]."\n";
    } else {
        echo "Nie znaleziono kraju w słowniczku.\n";
    }
}

getCountry("Polska");
