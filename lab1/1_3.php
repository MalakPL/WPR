<?php


function censorWords($sentence) : string
{
    $badWords = array("spaślak", "ciajmajda");

    $words = explode(" ", $sentence);

    foreach ($words as &$word) {
        if (in_array(strtolower($word), $badWords)) {
            $word = str_repeat("*", strlen($word));
        }
    }

    $censoredSentence = implode(" ", $words);

    return $censoredSentence;
}

echo censorWords("Kononowicz to jest spaślak a major to ciajmajda i tak dalej i tak dalej, łeh");

