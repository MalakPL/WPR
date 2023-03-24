<?php
function PESEL2BirthDate($pesel)
{
    return DateTime::createFromFormat('ymd', substr($pesel, 0, 6))->format('d-m-y');
}

echo "Data urodzenia: " . PESEL2BirthDate("97041001974")."<br>";



